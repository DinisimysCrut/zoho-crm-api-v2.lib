<?php

namespace ZohoCrmApiV2\Exceptions;


class BadResponseException extends \Exception
{
    protected $code = 7121;

    public function __construct($message) {
        $this->message = $message;
    }
}