<?php

namespace Sankyu\One;

use Sankyu\Client;
use Sankyu\Request;

class Transaction extends Request
{
    /**
     * @param $bill
     * @return \Laravie\Codex\Common\Response|\Laravie\Codex\Contracts\Response
     */
    public function all($bill)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('GET', $endpoint.'/v1/bills/'.$bill.'/transactions', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/json',
                    ]
                ),
            ]);

        return $this->responseWith($response);
    }

}
