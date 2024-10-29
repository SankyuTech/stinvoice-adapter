<?php

namespace Sankyu\One\Validator;

use Sankyu\Client;
use Sankyu\Request;

class IntegrationAccess extends Request
{
    public function checkAccess(){


        $endpoint = $this->client->endpoint();
        $response = $this->client->httpClient()

            ->request('POST', $endpoint.'/ping', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                )
            ]);

        return $this->responseWith($response);

    }

    public function checkIdentificationParty($param){

        $endpoint = $this->client->endpoint();
        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/validate-tax-no', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'form_params' => $param
            ]);

        return $this->responseWith($response);

    }
}