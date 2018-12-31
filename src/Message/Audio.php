<?php

namespace CodeBot\Message;

class Video implements Message
{
    private $recipienteId;

    public function __construct(string $recipienteId)
    {
        $this->recipientId = $recipienteId;
    }
    public function message(string $messageText) :array
    {
        return [
            'recipient' => [
                'id'=>$this->recipienteId
            ],
            'message' => [
                'attachment' => [
                    'type' => 'video',
                    'payload' => [
                        'url' => $messageText
                    ]
                ]
            ]

        ];
    }
}