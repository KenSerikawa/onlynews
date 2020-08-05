<?php

declare(strict_types=1);

namespace App\Service;

final class SourceFinder
{
    private $apikey;

    public function __construct()
    {
        $this->apikey = $_ENV['NEWS_API_KEY'];
    }
    public function __invoke()
    {
        $url = 'http://newsapi.org/v2/sources?language=en&apiKey=' . $this->apikey;
        
        return json_decode(file_get_contents($url), true);
    }
} 