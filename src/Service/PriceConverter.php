<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class PriceConverter
{
    private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function convertEurToDollar(float $euroPrice): float
    {
        $response = $this->client->request(
            'GET',
            'https://v6.exchangerate-api.com/v6/f1725bd5cdf8f600c43aaf1f/pair/EUR/USD/' . $euroPrice
        );

        $content = $response->toArray();
        
        return $content['conversion_result'];
    }


    public function convertEurToYen(float $euroPrice): float
    {
        $response = $this->client->request(
            'GET',
            'https://v6.exchangerate-api.com/v6/f1725bd5cdf8f600c43aaf1f/pair/EUR/JPY/' . $euroPrice
        );

        $content = $response->toArray();
        
        return $content['conversion_result'];
    }
}