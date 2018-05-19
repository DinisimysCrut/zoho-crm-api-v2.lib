<?php

namespace ZohoCrmApiV2\Exceptions;


class NullResponseException extends \Exception
{
    protected $code = 7120;

    public function __construct() {
        $this->message = "Array data is null";
    }
}