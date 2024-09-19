<?php

namespace Sankyu;

use Sankyu\Contracts\Authenticable;
use Psr\Http\Client\ClientInterface;

class Client
{
    /**
     * @var ClientInterface
     */
    protected $httpClient;

    /**
     * @var array
     */
    protected $config = [];

    /**
     * @var string
     */
    protected $endpoint = 'https://stinvoice.sankyutech.com.my/api/v1';

    /**
     * @var bool
     */
    protected $useSandbox = false;

    /**
     * @var string
     */
    protected $defaultVersion = 'v1';

    /**
     * @var string[]
     */
    protected $supportedVersions = [
        'v1' => 'One',
        'v2' => 'Two',
        'v3' => 'Three',
    ];

    /**
     * Auth type
     * @var Authenticable|null
     */
    protected ?Authenticable $auth;

    /**
     * Client constructor.
     * @param ClientInterface $httpClient
     * @param array $config
     */
    public function __construct(ClientInterface $httpClient, array $config)
    {
        $this->httpClient = $httpClient;
        $this->config = $config;
    }

    /**
     * @param ClientInterface $httpClient
     * @param array $config
     * @return static
     */
    public static function make(ClientInterface $httpClient, array $config): self
    {
        return new self($httpClient, $config);
    }

    /**
     * @return $this
     */
    public function v1(): self
    {
        $this->defaultVersion = 'v1';
        return $this;
    }

    public function provideAuth(Authenticable $auth)
    {
        $this->auth = $auth;
        return $this;
    }

    public function auth(): Authenticable
    {
        return $this->auth;
    }

    /**
     * @param string|null $version
     * @return mixed
     */
    public function submissions(?string $version = null)
    {
        return $this->uses('Submission', $version);
    }

    public function useOtherEndpoint(?string $endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * @return string
     */
    public function endpoint(): string
    {
        return $this->useSandbox() ? $this->sandbox() : $this->endpoint;
    }

    /**
     * @return string
     */
    public function sandbox(): string
    {
        return 'https://preprod-stinvoice.sankyutech.com.my/api/v1';
    }

    /**
     * @return string
     */
    public function useSandbox(): string
    {
        if (!array_key_exists('use_sandbox', $this->config())) {
            $this->useSandbox = false;
        } else {
            $this->useSandbox = $this->config()['use_sandbox'];
        }

        return $this->useSandbox;
    }

    /**
     * @return array
     */
    public function config(): array
    {
        return $this->config;
    }

    /**
     * @param string $service
     * @param string|null $version
     * @return mixed
     */
    public function uses(string $service, ?string $version)
    {
        if (\is_null($version) || !\array_key_exists($version, $this->supportedVersions)) {
            $version = $this->defaultVersion;
        }

        $name = str_replace('.', '\\', $service);

        $class = sprintf('%s\%s\%s', $this->getResourceNamespace(), $this->supportedVersions[$version], $name);

        if (!class_exists($class)) {
            throw new InvalidArgumentException("Resource [{$service}] for version [{$version}] is not available.");
        }

        return new $class($this);
    }

    /**
     * @return string
     */
    public function version(): string
    {
        return $this->version;
    }

    /**
     * @return ClientInterface
     */
    public function httpClient(): ClientInterface
    {
        return $this->httpClient;
    }

    /**
     * @return false|string
     */
    public function __toString()
    {
        return json_encode($this->config);
    }

    /**
     * @return string
     */
    public function getResourceNamespace()
    {
        return __NAMESPACE__;
    }
}
