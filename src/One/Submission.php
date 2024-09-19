<?php

namespace Sankyu\One;

use Sankyu\Client;
use Sankyu\Request;

class Submission extends Request
{
    /**
     * @param $param
     * @return \Laravie\Codex\Common\Response|\Laravie\Codex\Contracts\Response
     */

    public function invoice($param)
    {   
        $endpoint = $this->client->endpoint();
        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/submit/invoice', [
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

    public function creditNote($param)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/v1/credit-note', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'body' => $param
            ]);

        return $this->responseWith($response);
    }

    public function debitNote($param)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/v1/debit-note', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'body' => $param
            ]);

        return $this->responseWith($response);
    }

    public function refundNote($param)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/v1/refund-note', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'body' => $param
            ]);

        return $this->responseWith($response);
    }

    public function selfBilledInvoice($param)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/v1/self-billed-invoice', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'body' => $param
            ]);

        return $this->responseWith($response);
    }

    public function selfBilledCreditNote($param)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/v1/self-billed-credit-note', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'body' => $param
            ]);

        return $this->responseWith($response);
    }

    public function selfBilledDebitNote($param)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/v1/self-billed-debit-note', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'body' => $param
            ]);

        return $this->responseWith($response);
    }

    public function selfBilledRefundNote($param)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/v1/self-refund-note', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'body' => $param
            ]);

        return $this->responseWith($response);
    }


    public function getSubmissionDetails($param)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/v1/get-submission', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'body' => $param
            ]);

        return $this->responseWith($response);
    }

    public function getSubmissionDocument($param)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/v1/get-submission-document', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'body' => $param
            ]);

        return $this->responseWith($response);
    }

    public function getSubmissionDocumentDetails($param)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/v1/get-submission-document-details', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'body' => $param
            ]);

        return $this->responseWith($response);
    }

    public function getSubmissionDocumentDetailsQr($param)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/v1/get-submission-document-details-qr', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'body' => $param
            ]);

        return $this->responseWith($response);
    }

    public function getRecentDocument()
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('GET', $endpoint.'/v1/get-recent-document', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
            ]);

        return $this->responseWith($response);
    }

    public function setRejectDocument($param)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/v1/reject-document', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'body' => $param
            ]);

        return $this->responseWith($response);
    }

    public function setCancelDocument($param)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/v1/cancel-document', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'body' => $param
            ]);

        return $this->responseWith($response);
    }

    public function getDocumentTypes($param)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('GET', $endpoint.'/v1/get-documents-types', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'body' => $param
            ]);

        return $this->responseWith($response);
    }

    public function validateTaxNo($param)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/v1/validate-tax-no', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'body' => $param
            ]);

        return $this->responseWith($response);
    }

    public function getDocumentQrUrl($param)
    {
        $endpoint = $this->client->endpoint();

        $response = $this->client->httpClient()
            ->request('POST', $endpoint.'/v1/get-document-qr-url', [
                'headers' => array_merge(
                    $this->client->auth()->credentials(),
                    [
                        'Accept' => 'application/json',
                        'Content-type' => 'application/x-www-form-urlencoded',
                    ]
                ),
                'body' => $param
            ]);

        return $this->responseWith($response);
    }

}
