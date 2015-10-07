<?php

class LastIterator extends FilterIterator
{
    //protected $period;

    public function __construct(Iterator $iterator, $period = NULL)
    {
        parent::__construct($iterator);
        //$this->period = $period;
    }

    public function accept()
    {
        if (!$this->getInnerIterator()->valid())
        {
            return FALSE;
        }

        $row = $this->getInnerIterator()->current();

        /*
        $dt  = new DateTime($this->period);
        if ($dt->format('Y-m-d').'00:00:00' < $row->created_at)
        {
            return TRUE;
        }
        */
        return TRUE;
    }
}