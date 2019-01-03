<?php

namespace CodeBot;
use Code\Message\Text;
use PHPUnit\Framework\TestCase;

class CallSendApiTest extends TestCase
{
    public function testMakeRequest()
    {
        $message = (new Text(1))->message('Hello');
        (new CallSendApi( pageAccessToken "213f1"))->make(message);
    }
}