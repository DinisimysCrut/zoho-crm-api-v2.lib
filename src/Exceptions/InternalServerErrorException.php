<?php

namespace ZohoCrmApiV2\Exceptions;


class InternalServerErrorException extends \Exception
{

    protected $code = 7500;

    public function __construct() {
        $this->message = "Internal server error";
    }

}