<?php

namespace CodeBot;

use CodeBot\Build\Solid;
use PHPUnit\Framework\TestCase;

class GetStartedButtonTest extends TestCase
{
    private $pageAccesstoken = 'EAAFyZCCO5dmoBACbiDCZCRjc4ZBZCj6HzqW1rdT0WZBsdZCUHbfqsAQieCitQQLCwv9uOrsjU1ZAnRBADnOeZBzkjr7ve37P55A2sZBcsHvEJbKaG0g5BQBKb4FYx9FfypmYX0C9dzYZAQZAIeSiijVvNoHlMPFtUgUoggDFAUthWH5HgZDZD';
    public function testAddGetStartedButton()
    {
        $data = (new GetStartedButton())->add('iniciar');
        Solid::pageAccessToken($this->pageAccesstoken);
        $result = $callSendApi->make($data, CallSendApi::URL_PROFILE);
        
        $this->assertTrue(is_string($result));
    }

    public function testRemoveGetStartedButton()
    {
        $data = (new GetStartedButton())->remove();
        Solid::pageAccessToken($this->pageAccesstoken);
        $result = $callSendApi->make($data, CallSendApi::URL_PROFILE, 'DELETE');

        $this->assertTrue(is_string($result));
    }
}