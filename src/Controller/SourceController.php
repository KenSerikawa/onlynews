<?php

namespace App\Controller;

use App\Service\NewsByLanguageFinder;
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

    public function getOnlyByLang(string $lang, NewsByLanguageFinder $finder)
    {
        return $this->render('news/index.html.twig', [
            'sources' => $finder->__invoke($lang)['sources']
        ]);
    }
}
