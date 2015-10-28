<?php

/**
 * Class UrlRule
 *
 */
class UrlRule implements RuleInterface
{
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

        return filter_var($value, FILTER_VALIDATE_URL) !== FALSE;
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
            return $this->field.' must be a valid URL';
        }
    }
}