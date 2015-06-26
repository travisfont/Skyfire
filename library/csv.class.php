<?php

// CSV interface and function into object inherence

class Csv extends System
{
    protected function convertCsvFileToArray($data)
    {
        return convertCsvFileToArray($data);
    }
}