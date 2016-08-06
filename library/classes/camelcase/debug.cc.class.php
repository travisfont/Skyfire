<?php

// Debug interface and function into object inherence

class Debug extends Controller
{
    protected function getDefineConstants($type = 'user')
    { return (array) NULL; }

    protected function getUserDefinedConstants()
    { return (array) NULL; }

    protected function hasLocale($locale)
    { return (bool) NULL; }
}
