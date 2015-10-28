<?php

/**
 * Class AlphaRule
 *
 */
class AlphaRule implements RuleInterface
{
    /**
     * RegExp pattern
     *
     * @var string
     */
    protected $pattern = '#^([a-zA-Z\s])+$#';

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
     * @return bool|mixed
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
     * @return mixed|void
     */
    public function message()
    {
        if ($this->message)
        {
            return $this->message;
        }
        else
        {
            return $this->field.' must be alpha';
        }
    }
}