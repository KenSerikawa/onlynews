<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\NewsFinder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class RootController extends AbstractController
{
    public function index(Request $request)
    {
        return $this->render('news/index.html.twig', [
           
        ]);
    }
}
