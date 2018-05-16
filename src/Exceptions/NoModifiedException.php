<?php

namespace ZohoCrmApiV2\Exceptions;


class NoModifiedException extends \Exception
{

    protected $code = 7304;

    public function __construct() {
        $this->message = "No modified";
    }

}