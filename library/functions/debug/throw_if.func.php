<?php


final class _throw_if
{
    private $boolean;
    private $exception;
    private $message;

    function __construct($boolean, $exception, $message)
    {
        $this->boolean   = $boolean;
        $this->exception = $exception;
        $this->message   = $message;
    }

    public function true()
    {
        if ($this->boolean)
        {
            throw (is_string($this->exception) ? new $this->exception($this->message) : $this->exception);
        }
    }

    /**
     *
     */
    public function false()
    {
        if (!$this->boolean)
        {
            throw (is_string($this->exception) ? new $this->exception($this->message) : $this->exception);
        }
    }
}

/**
 * If the first parameter is a boolean and it’s "true," and the second method following is true(), then it throws an exception.
 * If the first parameter is a boolean and it’s "false," and the second method following is false(), then it throws an exception.
 *
 * @param $boolean
 * @param $exception
 * @param string $message
 *
 * @throws Exception following the first paremter if true or false
 */
function throw_if($boolean, $exception, $message = '')
{
    return new _throw_if($boolean, $exception, $message);
}

/*
throw_if(TRUE, new TestExampleException('Exeception is true'))->true();
throw_if(TRUE, TestExampleException::class, 'Exeception is true')->true();
throw_if(TRUE, 'TestExampleException',      'Exeception is true')->true();

throw_if(FALSE, new TestExampleException('Exeception is false'))->false();
throw_if(FALSE, TestExampleException::class, 'Exeception is false')->false();
throw_if(FALSE, 'TestExampleException',      'Exeception is false')->false();
*/
