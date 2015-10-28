<?php

/**
 * Interface Rule
 *
 */

interface RuleInterface
{

    /**
     * @param $field
     * @param $value
     * @param null $message
     *
     * @return mixed
     */
    public function run($field, $value, $message = NULL);

    /**
     * Rule error message
     * @return mixed
     */
    public function message();
}
