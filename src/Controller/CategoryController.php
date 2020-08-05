<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\SourceCategoryFinder;

class CategoryController extends AbstractController
{
    private $sources;

    public function __construct(SourceCategoryFinder $sourceCategoryFinder)
    {
        $this->sources = $sourceCategoryFinder;
    }
    public function getGeneral()
    {
        return $this->render('news/index.html.twig', [
            'sources' => $this->sources->__invoke('general')['sources']
        ]);
    }
    public function getBusiness()
    {
        return $this->render('news/index.html.twig', [
            'sources' => $this->sources->__invoke('business')['sources']
        ]);
    }
    public function getEntertainment()
    {
        return $this->render('news/index.html.twig', [
            'sources' => $this->sources->__invoke('entertainment')['sources']
        ]);
    }
    public function getHealth()
    {
        return $this->render('news/index.html.twig', [
            'sources' => $this->sources->__invoke('health')['sources']
        ]);
    }
    public function getScience()
    {
        return $this->render('news/index.html.twig', [
            'sources' => $this->sources->__invoke('science')['sources']
        ]);
    }
    public function getSports()
    {
        return $this->render('news/index.html.twig', [
            'sources' => $this->sources->__invoke('sports')['sources']
        ]);
    }
    public function getTech()
    {
        return $this->render('news/index.html.twig', [
            'sources' => $this->sources->__invoke('technology')['sources']
        ]);
    }
}
