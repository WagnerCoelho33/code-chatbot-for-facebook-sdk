<?php

namespace CodeBot\Message;

class Image implements Message
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
                    'type' => 'image',
                    'payload' => [
                        'url' => $messageText
                    ]
                ]
            ]

        ];
    }
}