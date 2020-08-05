<?php

declare(strict_types=1);

namespace App\Service;

final class HeadlineFinder
{
    private $apikey;

    public function __construct()
    {
        $this->apikey = $_ENV['NEWS_API_KEY'];
    }
    public function __invoke()
    {
        $url = 'http://newsapi.org/v2/top-headlines?country=es&pageSize=&apiKey=' . $this->apikey;
        
        return json_decode(file_get_contents($url), true);
    }
} 