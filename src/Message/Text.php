<?php

namespace CodeBot\Message;

class Text
{
    private $recipienteId;

    public function __construct(string $recipienteId)
    {
        $this->recipienteId = $recipienteId;
    }

    public function message(string $messageText) :array
    {
        return [
            'recipient' => [
                'id'=>$this->recipienteId
            ],
            'message' => [
                'text' => '$messageText',
                'metadata' => 'DEVELOPER_DEFINED_METADATA'
            ]

        ];
    }
}