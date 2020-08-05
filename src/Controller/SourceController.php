<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\SourceFinder;

class SourceController extends AbstractController
{
    private $sources;

    public function __construct(SourceFinder $sourceFinder)
    {
        $this->sources = $sourceFinder;
    }

    public function __invoke($source)
    {
        return $this->render('search/index.html.twig', [
            'results' => $this->sources->__invoke($source)
        ]);
    }
}
