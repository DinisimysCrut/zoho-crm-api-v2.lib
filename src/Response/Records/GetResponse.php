<?php

namespace ZohoCrmApiV2\Response\Records;


use ZohoCrmApiV2\Response\Response;

class GetResponse extends Response
{

    public function parser($response)
    {
        $response = parent::parser($response);
        return $this->dataOrException($response);
    }
}