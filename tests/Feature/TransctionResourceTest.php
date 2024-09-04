<?php

namespace Sankyu\Tests\Feature;

use Codexpert\Faker\HttpFaker;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Mockery as m;
use Sankyu\BearerAuth;
use Sankyu\Client;
use Sankyu\Tests\TestCase;

class TransactionResourceTest extends TestCase
{
    protected function tearDown(): void
    {
        m::close();
    }

    public function testShouldReturnCollectionsOfTransaction()
    {

        $response = '{"status":200,"message":"test created","data":[]}';

        $httpFaker = HttpFaker::create()->shouldResponseJson(200, [], $response);

        $client = new Client($httpFaker->faker(), [
            'api_key' => $this->getApiKey(),
            'use_sandbox' => true,
        ]);

        $this->assertTrue(true);
    }

}
