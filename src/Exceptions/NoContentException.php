<?php

namespace ZohoCrmApiV2\Exceptions;


class NoContentException extends \Exception
{

    protected $code = 7204;

    public function __construct() {
        $this->message = "No content";
    }

}