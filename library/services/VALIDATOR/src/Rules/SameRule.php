<?php

/**
 * Compare a field with an other
 * eg. Password and Confirm Password validation
 * Class SameRule
 *
 */
class SameRule implements RuleInterface
{
    /**
     * Holds the fields array
     *
     * @var null
     */
    private $fields    = NULL;

    /**
     * the field key to be compared
     *
     * @var null
     */
    private $fieldKey  = NULL;

    /**
     * Field Label
     *
     * @var null
     */
    protected $field   = NULL;

    /**
     * the error message to be returned if validation fails.
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

        if (!$this->fieldKey || !$this->fields)
        {
            return FALSE;
        }

        if ($this->fields[$this->fieldKey] == $value)
        {
            return TRUE;
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
            return $this->field.' must be same as '.$this->fieldKey;
        }
    }

    /**
     * Set Rule Required properties
     *
     * @param $fields
     * @param $fieldKey
     */
    public function prepareRule($fields, $fieldKey)
    {
        $this->fields   = $fields;
        $this->fieldKey = $fieldKey;
    }
}