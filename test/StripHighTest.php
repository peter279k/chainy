<?php

namespace chainy\test;

use chainy\StripHigh;
use PHPUnit\Framework\TestCase;

class StripHighTest extends TestCase
{
    /**
     * @param $input
     * @param $expected
     * @dataProvider provider_testInvoke
     */
    function testInvoke($input, $expected)
    {
        $this->assertEquals($expected, (new StripHigh)($input));
    }

    function provider_testInvoke()
    {
        return [
            ["normal string", "normal string"],
            ["\x1", "\x1"],
            ["some \xA0 string with strange characters", "some  string with strange characters"],
        ];
    }
}
