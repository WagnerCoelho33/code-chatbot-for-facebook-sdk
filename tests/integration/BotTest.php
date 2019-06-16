<?php
namespace CodeBot;
use PHPUnit\Framework\TestCase;
use CodeBot\Build\Solid;
class BotTest extends TestCase
{
    private $pageAccesstoken = 'EAAFyZCCO5dmoBACbiDCZCRjc4ZBZCj6HzqW1rdT0WZBsdZCUHbfqsAQieCitQQLCwv9uOrsjU1ZAnRBADnOeZBzkjr7ve37P55A2sZBcsHvEJbKaG0g5BQBKb4FYx9FfypmYX0C9dzYZAQZAIeSiijVvNoHlMPFtUgUoggDFAUthWH5HgZDZD';
    public function testAddMenu()
    {
        $call_to_actions = [
            [
                'id' => 1,
                'type' => 'nested',
                'title' => 'O que eu posso fazer?',
                'parent_id' => 0,
                'value' => null,
            ],
            [
                'id' => 2,
                'type' => 'web_url',
                'title' => 'Visite nosso site',
                'parent_id' => 0,
                'value' => 'https://sites.code.education/home-code/',
            ],
            [
                'id' => 3,
                'type' => 'web_url',
                'title' => 'Quer aprender Laravel e Vue?',
                'parent_id' => 1,
                'value' => 'http://sites.code.education/laravel-com-vuejs/',
            ],
            [
                'id' => 4,
                'type' => 'postback',
                'title' => 'Ver opções iniciais',
                'parent_id' => 1,
                'value' => 'iniciar',
            ],
        ];
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAccesstoken);
        $bot->addMenu('default', false, $call_to_actions);
        $this->AssertTrue(true);
    }
    public function testRemoveMenu()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAccesstoken);
        $bot->removeMenu();
        $this->AssertTrue(true);
    }
    public function testAddGetStartedButton()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAccesstoken);
        $bot->addGetStartedButton('iniciar');
        $this->AssertTrue(true);
    }
    public function testRemoveGetStartedButton()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAccesstoken);
        $bot->removeGetStartedButton();
        $this->AssertTrue(true);
    }
}