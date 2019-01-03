<?php

namespace CodeBot\Message;

use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testReturnArray()
    {
        $actual = (new Text(1))->message('Hello');
        $expected = [
            'recipient'  => [
                'id'     =>1
            ],
            'message' => [
                'text'     => 'Hello',
                'metadata' => 'DEVELOPER_DEFINED_METADATA'
            ]

        ];

        //$this->assertTrue($this->assertEquals($actual, $expected));
        $this->assertEquals($actual, $expected);
    }
}