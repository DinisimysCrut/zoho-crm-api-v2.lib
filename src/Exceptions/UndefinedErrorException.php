<?php

namespace ZohoCrmApiV2\Exceptions;


class UndefinedErrorException extends \Exception
{

    protected $code = 7100;

    public function __construct($message) {
        $this->message = $message;
    }

}