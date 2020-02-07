<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @return Response
     */
    public function index(Request $request):Response
    {
        $request->headers->get('host');
        $response = new Response('{data": {result":"ok"}', 404, [
            'Content-Type' => 'application/json',
            'X-Message' => 'coucou'
        ]);
        return $response;
    }
}