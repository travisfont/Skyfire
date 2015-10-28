<?php

/**
 * Class AlnumRule
 *
 */
class AlnumRule implements RuleInterface
{

    /**
     * RegExp pattern
     *
     * @var string
     */
    protected $pattern = '#^([a-zA-Z0-9])+$#';

    /**
     * @var null
     */
    protected $field   = NULL;

    /**
     * holds the error message to be returned
     *
     * @var null
     */
    protected $message = NULL;

    /**
     * @param $field
     * @param $value
     * @param null $message
     *
     * @return mixed
     */
    public function run($field, $value, $message = NULL)
    {
        $this->field   = $field;
        $this->message = $message;

        if (preg_match($this->pattern, $value))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    /**
     * Rule error message
     *
     * @return mixed
     */
    public function message()
    {
        if ($this->message)
        {
            return $this->message;
        }
        else
        {
            return $this->field.' must not contain special characters';
        }
    }
}