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
    public function __invoke(string $sourceName)
    {
        $sourceName = str_replace(' ', '+', $sourceName);
        $url = 'http://newsapi.org/v2/top-headlines?sources='. $sourceName .'&pageSize=99&apiKey=' . $this->apikey;
        
        return json_decode(file_get_contents($url), true);
    }
} 