<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\NewsFinder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\SourceFinder;

class RootController extends AbstractController
{
    private $sources;
    public function __construct(SourceFinder $sfinder)
    {
        $this->sources = $sfinder->__invoke();
    }
    public function index()
    {       
        return $this->render('news/index.html.twig', [
            'sources' => $this->sources['sources']
        ]);
    }
}
