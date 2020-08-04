<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\NewsFinder;

class SearchController extends AbstractController
{
    private $finder; 

    public function __construct(NewsFinder $finder)
    {
        $this->finder = $finder;
    }
    public function __invoke(Request $request)
    {
        $query = $request->request->get('query');
        $results = $this->finder->__invoke($query);

        return $this->render('search/index.html.twig', [
            'results' => $results
        ]);
    }
}
