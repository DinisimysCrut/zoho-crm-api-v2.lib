<?php

namespace ZohoCrmApiV2\Exceptions;


class InvalidJsonException extends \Exception
{
    protected $code = 7101;

    public function __construct() {
        $this->message = "Invalid json";
    }
}