<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LongController extends AbstractController
{
    /**
     * @Route(
     * "/long",
     *  name="long",
     * requirements={"firstname"="[a-z-]+"}  
     * )
     */
    public function index(?string $firstname = null):Response
    {
       // dd($firstname);
        return $this->render('long/index.html.twig', [
            'firstname' => $firstname,
            'list' => [
                'key0' => 'value0',
                'key1' => 'value1',
                'key2' => 'value2',
            ],
            'now' => new \DateTime(),
            'price' => 45000.80
        ]);
        
    }
}