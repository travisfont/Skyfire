<?php

abstract class Model
{
    protected function __construct()
    {
        load::service('DB');

        return new DB;
    }
}