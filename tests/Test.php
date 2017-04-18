<?php

namespace phpUnitSkyfire\Test
{
    require_once '/../library/packages/autoload.php';

    class SkyfireCoreTest extends \PHPUnit_Framework_TestCase
    {
        public function testTrueIsTrue()
        {
            $foo = true;
            $this->assertTrue($foo);
        }

        public function testFailure()
        {
            $this->assertSame('2204', 2204);
        }
    }
}
