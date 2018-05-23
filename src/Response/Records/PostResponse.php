<?php

namespace ZohoCrmApiV2\Response\Records;


use ZohoCrmApiV2\Exceptions\BadResponseException;
use ZohoCrmApiV2\Response\Response;

class PostResponse extends Response
{


    public function parser($response)
    {
        $response = parent::parser($response);
        $data = $this->dataOrException($response);
        return $this->dataToArray($data);

    }

    protected function dataToArray($data)
    {
        $arrayData = [];
        foreach ($data as $record)
        {
            $arrayData[] = $this->recordToArray($record);
        }
        return $arrayData;
    }

    protected function recordToArray($record)
    {
        try {
            if($record['code'] == 'SUCCESS') {
                return $record['details']['id'];
            }
            return $record;
        } catch(\Exception $exception) {
            throw new BadResponseException($exception->getMessage());
        }
    }
}