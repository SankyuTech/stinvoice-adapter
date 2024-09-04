<?php

namespace Sankyu;

use Laravie\Codex\Common\Response;
use Psr\Http\Message\ResponseInterface;
use Sankyu\Client;

abstract class Request
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * Transaction constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param Client $client
     * @return Transaction
     */
    public static function make(Client $client)
    {
        return new self($client);
    }

    /**
     * @param ResponseInterface $message
     * @return Response
     */
    protected function responseWith(ResponseInterface $message)
    {
        return new Response($message);
    }

    /**
     * @return array
     */
    protected function getApiHeaders(): array
    {
        return [];
    }

    /**
     * @return array
     */
    protected function getApiBody(): array
    {
        return [];
    }

    /**
     * @param array $headers
     * @return array
     */
    final protected function mergeApiHeaders(array $headers = []): array
    {
        return array_merge($this->getApiHeaders(), $headers);
    }

    /**
     * @param array $body
     * @return array
     */
    final protected function mergeApiBody(array $body = []): array
    {
        return array_merge($this->getApiBody(), $body);
    }

}
