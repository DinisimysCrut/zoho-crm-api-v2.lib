<?php

namespace ZohoCrmApiV2\Exceptions;


class UnauthorizedException extends \Exception
{

    protected $code = 7401;

    public function __construct() {
        $this->message = "Authorization error";
    }

}