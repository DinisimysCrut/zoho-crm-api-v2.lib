<?php

namespace ZohoCrmApiV2\Exceptions;


class BadRequestException extends \Exception
{
    protected $code = 7400;

    public function __construct() {
        $this->message = "Bad request";
    }
}