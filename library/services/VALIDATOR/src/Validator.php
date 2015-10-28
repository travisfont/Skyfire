<?php

class Validator
{
    /**
     * RegExp patterns
     *
     * @var array
     */
    public $expressions = [];

    /**
     * Custom RegExp error messages
     *
     * @var array
     */
    private $error_messages = [];

    /**
     * holds validation errors
     *
     * @var array
     */
    private $validation_errors = [];

    /**
     * @var array
     */
    private static $errors = [];

    /**
     * @var null
     */
    private static $instance = NULL;


    /**
     * @var array
     */
    private $builtin_rules = [];

    /**
     * @var array
     */
    private $fields = [];

    /**
     * @var array
     */
    private $rules = [];

    /**
     *  Class Constructor
     */
    public function __construct()
    {
        static::$instance = $this;
    }

    /**
     * @param $key
     * @param $expression
     * @param null $message
     * @return bool
     * @throws Exception
     */
    public function registerExpression($key, $expression, $message = NULL)
    {
        if (!isset($this->expressions[$key]))
        {
            $this->expressions[$key] = $expression;

            if ($message)
            {
                $this->error_messages[$key] = $message;
            }

            return TRUE;
        }

        throw new Exception('Expression key already exists');
    }

    /**
     * @param $ruleName
     * @param callable $callback
     * @return $this
     */
    public function addRule($ruleName, Closure $callback)
    {
        $this->rules[$ruleName] = $callback;

        return $this;
    }

    /**
     * @param $key
     * @param $newExpression
     * @param null $message
     * @return bool
     */
    public function updateExpression($key, $newExpression, $message = NULL)
    {
        if ($this->expressions[$key])
        {
            $this->expressions[$key] = $newExpression;

            if ($message)
            {
                $this->error_messages[$key] = $message;
            }

            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    /**
     * returns true if validation passed
     *
     * @return bool
     */
    public function passed()
    {
        if (count(self::$errors) < 1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    /**
     * this will return true if validation fails
     *
     * @return bool
     */
    public function failed()
    {
        if (count(self::$errors) > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    /**
     * retrieve error messages after validation
     *
     * @return array
     */
    public function getErrors()
    {
        return self::$errors;
    }

    /**
     * Get error message of a field
     *
     * @param $fieldKey
     * @return mixed
     */
    public static function error($fieldKey, $template = NULL)
    {
        if (!session_id())
        {
            session_start();
        }

        if (isset($_SESSION[SESSION_DATA_KEY]))
        {
            if (count($_SESSION[SESSION_DATA_KEY]) > 0)
            {
                self::$errors = $_SESSION[SESSION_DATA_KEY];

                unset($_SESSION[SESSION_DATA_KEY]);
            }
        }

        if (isset(self::$errors[$fieldKey]))
        {
            $message = self::$errors[$fieldKey];

            if (!is_null($template))
            {
                $message = str_ireplace(":message", $message, $template);
            }

            return $message;
        }

        return '';
    }

    /**
     * @param $char
     * @param $string
     * @return bool
     */
    public function findChar($char, $string)
    {
        if (preg_match("#{$char}#", $string))
        {
            return TRUE;
        }

        return FALSE;
    }

    /**
     * @param array $fields the array of form fields - ( $_POST , $_GET, $_REQUEST )
     * @param $rules
     * @return Validator $this
     */
    public function validate($fields, $rules)
    {
        $this->fields = $fields;

        // loop through rules array
        foreach ($rules as $field => $ruleString)
        {
            $value = isset($fields[$field]) ? $fields[$field] : NULL;

            if ($this->isConditional($ruleString))
            {
                $ruleObj = $this->ifConditional($ruleString);

                if (!$this->isConditionMatches($fields, $ruleObj->field, $ruleObj->value))
                {
                    continue;
                }

                $ruleString = $ruleObj->rules;
            }

            $theRules = $this->extractRules($ruleString);

            foreach ($theRules as $theRule)
            {
                // extract custom messages passed with rule eg. email--Invalid Email
                $message = $this->extractCustomMessage($theRule);

                $this->validateByRule($field, $value, $theRule, $message);

                // check if current rule is registered by user at runtime
                if (array_key_exists($theRule, $this->expressions))
                {
                    // run the validation against Runtime registered regular expression
                    $this->validateAgainstExpression($field, $value, $theRule, $message);
                }

                // check if current rule is exists in custom rules
                if (array_key_exists($theRule, $this->rules))
                {
                    $this->validateAgainstCustomRules($field, $value, $theRule, $message);
                }
            }
        }

        return $this;
    }

    /**
     * @param $rule
     * @return bool
     */
    private function isConditional($rule)
    {
        if ($this->findChar('if:', $rule))
        {
            return TRUE;
        }

        return FALSE;
    }

    /**
     * @param $rule
     * @return object
     */
    private function ifConditional($rule)
    {
        preg_match("#if:(.*)\\[(.*)\\]\\((.*)\\)#", $rule, $matches);

        return (object) [
            'field' => $matches[1],
            'value' => $matches[2],
            'rules' => $matches[3]
        ];
    }

    /**
     * Convert an array key to Label eg. full_name to Full Name
     *
     * @param $key
     * @return string
     */
    private function keyToLabel($key)
    {
        return ucwords(str_replace(['-', '_', '+'], ' ', $key));
    }

    /**
     * save errors in session and go back to form
     */
    public function goBackWithErrors()
    {
        if (!session_id())
        {
            session_start();
        }

        $_SESSION[SESSION_DATA_KEY] = self::$errors;

        header('Location: '.$_SERVER['HTTP_REFERER']);
        exit;
    }

    /**
     * Returns error message passed with a rule
     *
     * @param $theRule
     * @return null|mixed
     */
    public function extractCustomMessage($theRule)
    {
        if ($this->findChar('--', $theRule))
        {
            $theRule = explode('--', $theRule);

            return end($theRule);
        }
        else
        {
            return NULL;
        }
    }

    /**
     * explode/split rules
     *
     * @param $rules
     * @return array
     */
    public function extractRules($rules)
    {
        if ($this->findChar('|', $rules))
        {
            return explode('|', $rules);
        }
        else
        {
            return [$rules];
        }
    }

    /**
     * Validate a rule against a custom registered expression
     *
     * @param $field
     * @param $value
     * @param $rule
     * @param null $message
     * @return bool
     */
    private function validateAgainstExpression($field, $value, $rule, $message = NULL)
    {
        if (preg_match($this->expressions[$rule], $value))
        {
            return TRUE;
        }

        if (!$message)
        {
            $message = $this->error_messages[$rule];
        }

        static::$errors[$field] = $message;

        return FALSE;
    }

    /**
     * Validate a Rule against built-in rules
     *
     * @param $field
     * @param $value
     * @param $rule
     * @param null $message
     * @return mixed
     */
    private function validateByRule($field, $value, $rule, $message = NULL)
    {
        $ruleClassName = $this->getRuleName($rule);

        if (!class_exists($ruleClassName))
        {
            return FALSE;
        }

        $ruleObject = new $ruleClassName();

        if ($this->isLengthRule($rule))
        {
            $ruleObject->setLength($this->extractLength($rule));;
        }
        else
        {
            if ($this->isSameRule($rule))
            {
                $ruleObject->prepareRule($this->fields, $this->extractSame($rule));
            }
        }

        $result = $ruleObject->run($this->keyToLabel($field), $value, $message);

        if (!$result)
        {
            static::$errors[$field] = $ruleObject->message();
        }

        return $result;
    }

    /**
     * @param $field
     * @param $value
     * @param $theRule
     * @return bool
     * @internal param $message
     */
    private function validateAgainstCustomRules($field, $value, $theRule)
    {
        $message = call_user_func_array($this->rules[$theRule], array($field, $value));

        if ($message === TRUE)
        {
            return TRUE;
        }

        if (is_bool($message) || is_null($message))
        {
            $message = $this->keyToLabel($field).' is invalid';
        }

        static::$errors[$field] = $message;

        return FALSE;
    }

    /**
     * returns length from length rules eg. 6 from min:6 and 9 from max:9
     *
     * @param $rule
     * @return mixed
     */
    private function extractLength($rule)
    {
        $rule = explode(':', $rule);

        return end($rule);
    }

    /**
     * detects a rule is length rule
     *
     * @param $rule
     * @return bool
     */
    private function isLengthRule($rule)
    {
        return $this->findChar('min:', $rule) || $this->findChar('max:', $rule);
    }

    /**
     * extracts rule name from rule string
     * this will will remove any length arguments or custom messages from rule
     * e.g max:20 will be max and email--Invalid Email will be email
     *
     * @param $ruleName
     * @return string
     */
    private function getRuleName($ruleName)
    {
        if ($this->findChar('--', $ruleName))
        {
            $ruleName = explode('--', $ruleName)[0];
        }

        if ($this->findChar(':', $ruleName))
        {
            $ruleName = explode(':', $ruleName)[0];
        }

        return ucwords($ruleName).'Rule';
    }

    /**
     * @param $fields
     * @param $field
     * @param $value
     * @return bool
     */
    private function isConditionMatches($fields, $field, $value)
    {
        if ($fields[$field] == $value)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    /**
     * @param $rule
     * @return bool
     */
    private function isSameRule($rule)
    {
        if ($this->findChar('same:', $rule))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    /**
     * @param $rule
     * @return mixed
     */
    private function extractSame($rule)
    {
        $rule = explode(':', $rule);
        $rule = end($rule);
        $rule = explode('--', $rule);

        return $rule[0];
    }

    /**
     * clear validator errors
     */
    public function clear()
    {
        static::$errors = array();
    }
}