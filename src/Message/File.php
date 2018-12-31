<?php

namespace CodeBot\Message;

class File implements Message
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
                    'type' => 'file',
                    'payload' => [
                        'url' => $messageText
                    ]
                ]
            ]

        ];
    }
}