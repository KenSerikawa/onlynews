<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\NewsFinder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\HeadlineFinder;

class HeadlineController extends AbstractController
{
    private $sources;
    public function __construct(HeadlineFinder $headlineFinder)
    {
        $this->sources = $headlineFinder->__invoke();
    }
    public function index()
    {       
        return $this->render('search/index.html.twig', [
            'results' => $this->sources
        ]);
    }
}
