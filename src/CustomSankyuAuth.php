<?php

namespace Sankyu;

use Sankyu\Contracts\Authenticable;

class CustomSankyuAuth implements Authenticable
{
    protected ?string $apiKey;
    protected ?string $apiSecret;

    /**
     * BearerAuth constructor.
     * @param Client $client
     */
    public function __construct(?string $apiKey, ?string $apiSecret)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
    }

    /**
     * @param Client $client
     * @return static
     */
    public static function make(Client $client): self
    {
        return new self($client);
    }

    /**
     * @return string[]
     */
    public function credentials(): array
    {
        return [
            'key' => $this->apiKey,
            'secret' => $this->apiSecret,
        ];
    }

}
