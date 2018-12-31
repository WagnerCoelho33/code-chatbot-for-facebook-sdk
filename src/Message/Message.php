<?php

namespace CodeBot\Message;

interface Message
{
    public function __construct(string $recipienteId);
    public function message(string $messageText) :array;
}