<?php

/**
 * Class MaxRule
 *
 */
class MaxRule implements RuleInterface
{
    /**
     * Field label
     *
     * @var null
     */
    protected $field   = NULL;

    /**
     * the error message to be returned
     *
     * @var null
     */
    protected $message = NULL;

    /**
     * length to be compared
     *
     * @var null
     */
    private $length    = NULL;

    /**
     * @param $field
     * @param $value
     * @param null $message
     *
     * @return bool|mixed
     * @throws Exception
     */
    public function run($field, $value, $message = NULL)
    {
        $this->field   = $field;
        $this->message = $message;

        if ($this->length)
        {
            if (strlen($value) <= $this->length)
            {
                return TRUE;
            }
        }
        else
        {
            throw new Exception('Length must be set before running the validation');
        }

        return FALSE;
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
            return $this->field.'must be less than '.$this->length.' characters';
        }
    }

    /**
     * set length for rule
     *
     * @param $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }
}
