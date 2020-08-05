<?php

declare(strict_types=1);

namespace App\Service;

final class NewsFinder
{
    private $apikey;

    public function __construct()
    {
        $this->apikey = $_ENV['NEWS_API_KEY'];
    }
    public function __invoke(string $query='')
    {
        $query = str_replace(' ', '+', $query);
        $url = 'http://newsapi.org/v2/everything?q=' . $query . '&sortBy=publishedAt&pageSize=99&apiKey=' . $this->apikey;
        
        return json_decode(file_get_contents($url), true);
    }
} 