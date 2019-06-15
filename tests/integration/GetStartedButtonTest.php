<?php

namespace CodeBot;


use PHPUnit\Framework\TestCase;

class GetStartedButtonTest extends TestCase
{
    public function testAddGetStartedButton()
    {
        $data = (new GetStartedButton())->add('iniciar');
        $callSendApi = new CallSendApi('EAAFyZCCO5dmoBACbiDCZCRjc4ZBZCj6HzqW1rdT0WZBsdZCUHbfqsAQieCitQQLCwv9uOrsjU1ZAnRBADnOeZBzkjr7ve37P55A2sZBcsHvEJbKaG0g5BQBKb4FYx9FfypmYX0C9dzYZAQZAIeSiijVvNoHlMPFtUgUoggDFAUthWH5HgZDZD');
        $result = $callSendApi->make($data, CallSendApi::URL_PROFILE);
        
        $this->assertTrue(is_string($result));
    }

    public function testRemoveGetStartedButton()
    {
        $data = (new GetStartedButton())->remove();
        $callSendApi = new CallSendApi('EAAFyZCCO5dmoBACbiDCZCRjc4ZBZCj6HzqW1rdT0WZBsdZCUHbfqsAQieCitQQLCwv9uOrsjU1ZAnRBADnOeZBzkjr7ve37P55A2sZBcsHvEJbKaG0g5BQBKb4FYx9FfypmYX0C9dzYZAQZAIeSiijVvNoHlMPFtUgUoggDFAUthWH5HgZDZD');
        $result = $callSendApi->make($data, CallSendApi::URL_PROFILE, 'DELETE');

        $this->assertTrue(is_string($result));
    }
}