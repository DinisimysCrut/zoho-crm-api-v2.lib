<?php

namespace ZohoCrmApiV2\Response;


use ZohoCrmApiV2\Exceptions\InternalServerErrorException;
use ZohoCrmApiV2\Exceptions\InvalidJsonException;
use ZohoCrmApiV2\Exceptions\NoContentException;
use ZohoCrmApiV2\Exceptions\NoModifiedException;
use ZohoCrmApiV2\Exceptions\UnauthorizedException;
use ZohoCrmApiV2\Exceptions\UndefinedErrorException;

class Response
{

    /**
     * @param \GuzzleHttp\Psr7\Response $response
     * @return array
     * @throws UnauthorizedException
     * @throws UndefinedErrorException
     */
    public function parser($response)
    {
        $statusCode = $response->getStatusCode();
        switch ($statusCode) {
            case 200:
            case 201:
            case 202:
                return $this->parserJson($response);
            case 204:
                throw new NoContentException();
            case 304:
                throw new NoModifiedException();
            case 401:
                throw new UnauthorizedException();
            case 500:
                throw new InternalServerErrorException();
            default:
                $content = $this->parserJson($response);
                throw new UndefinedErrorException($content['message'] ?? 'Undefined error');
        }

    }

    /**
     * @param \GuzzleHttp\Psr7\Response $response
     * @return array
     * @throws InvalidJsonException
     */

    private function parserJson($response)
    {
        try {
            $response = json_decode($response->getBody()->getContents(),true);
        } catch (\Exception $exception) {
            throw new InvalidJsonException();
        }
        return $response;
    }


}