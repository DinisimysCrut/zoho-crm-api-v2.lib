<?php
namespace ZohoCrmApiV2\Requests\Records\SingleRecord;

use ZohoCrmApiV2\Requests\Records\Categories\SingleRecord;
use ZohoCrmApiV2\Response\Records\SingleRecord\GetRecordById as GetRecordByIdResponse;

class GetRecordById extends SingleRecord
{

    public function request() {
        $this->setMethod('GET');
        $response = parent::request();
        return (new GetRecordByIdResponse())->parser($response);
    }

}
