<?php

/**
 * Class NumRule
 *
 */
class NumRule implements RuleInterface
{
    /**
     * @var string
     */
    protected $pattern = '#^([0-9])+$#';

    /**
     * field label eg. Price
     * @var null
     */
    protected $field   = NULL;

    /**
     * holds the error message to be returned
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
            return $this->field.' must be numeric';
        }
    }
}