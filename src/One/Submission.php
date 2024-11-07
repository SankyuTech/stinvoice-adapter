<?php

namespace Sankyu\One;

use Exception;
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

        try{

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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function creditNote($param)
    {
        $endpoint = $this->client->endpoint();

        try{

            $response = $this->client->httpClient()
                ->request('POST', $endpoint.'/credit-note', [
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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function debitNote($param)
    {
        $endpoint = $this->client->endpoint();

        try{

            $response = $this->client->httpClient()
                ->request('POST', $endpoint.'/debit-note', [
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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function refundNote($param)
    {
        $endpoint = $this->client->endpoint();

        try{

            $response = $this->client->httpClient()
                ->request('POST', $endpoint.'/refund-note', [
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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function selfBilledInvoice($param)
    {
        $endpoint = $this->client->endpoint();

        try{

            $response = $this->client->httpClient()
                ->request('POST', $endpoint.'/self-billed-invoice', [
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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function selfBilledCreditNote($param)
    {
        $endpoint = $this->client->endpoint();

        try{

            $response = $this->client->httpClient()
                ->request('POST', $endpoint.'/self-billed-credit-note', [
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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function selfBilledDebitNote($param)
    {
        $endpoint = $this->client->endpoint();

        try{

            $response = $this->client->httpClient()
                ->request('POST', $endpoint.'/self-billed-debit-note', [
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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function selfBilledRefundNote($param)
    {
        $endpoint = $this->client->endpoint();

        try{

            $response = $this->client->httpClient()
                ->request('POST', $endpoint.'/self-refund-note', [
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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }


    public function getSubmissionDetails($param)
    {
        $endpoint = $this->client->endpoint();

        try{

            $response = $this->client->httpClient()
                ->request('POST', $endpoint.'/get-submission', [
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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function getSubmissionDocument($param)
    {
        $endpoint = $this->client->endpoint();

        try{

            $response = $this->client->httpClient()
                ->request('POST', $endpoint.'/get-submission-document', [
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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }

    }

    public function getSubmissionDocumentDetails($param)
    {
        $endpoint = $this->client->endpoint();

        try{

            $response = $this->client->httpClient()
                ->request('POST', $endpoint.'/get-submission-document-details', [
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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function getSubmissionDocumentDetailsQr($param)
    {
        $endpoint = $this->client->endpoint();

        try{

            $response = $this->client->httpClient()
                ->request('POST', $endpoint.'/get-submission-document-details-qr', [
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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function getRecentDocument()
    {
        $endpoint = $this->client->endpoint();

        try{

            $response = $this->client->httpClient()
                ->request('GET', $endpoint.'/get-recent-document', [
                    'headers' => array_merge(
                        $this->client->auth()->credentials(),
                        [
                            'Accept' => 'application/json',
                            'Content-type' => 'application/x-www-form-urlencoded',
                        ]
                    ),
                ]);

            return $this->responseWith($response);

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function setRejectDocument($param)
    {
        $endpoint = $this->client->endpoint();

        try{


            $response = $this->client->httpClient()
                ->request('POST', $endpoint.'/reject-document', [
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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function setCancelDocument($param)
    {
        $endpoint = $this->client->endpoint();

        try{


            $response = $this->client->httpClient()
                ->request('POST', $endpoint.'/cancel-document', [
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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function getDocumentTypes($param)
    {
        $endpoint = $this->client->endpoint();

        try{

            $response = $this->client->httpClient()
                ->request('GET', $endpoint.'/get-documents-types', [
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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function validateTaxNo($param)
    {
        $endpoint = $this->client->endpoint();

        try{


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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function getDocumentQrUrl($param)
    {
        $endpoint = $this->client->endpoint();

        try{

            $response = $this->client->httpClient()
                ->request('POST', $endpoint.'/get-document-qr-url', [
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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function checkAccess()
    {
        $endpoint = $this->client->endpoint();

        try {

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

        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }
    }

    public function checkIdentificationParty($param)
    {

        $endpoint = $this->client->endpoint();

        try{

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


        } catch (Exception $e) {

            if(in_array($e->getCode(), [401,403,500])){

                return $this->responseWith($e->getResponse());
            }

            throw $e->getMessage();

        }

    }

}
