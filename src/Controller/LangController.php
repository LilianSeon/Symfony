<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LangController extends AbstractController
{
    /**
     * @Route("/lang", name="lang")
     */
    public function index()
    {
        return $this->render('lang/index.html.twig', [
            'controller_name' => 'LangController',
        ]);
    }
}
