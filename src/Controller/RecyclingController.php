<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class RecyclingController extends AbstractController
{
    /**
     * @Route("/recycling", name="recycling")
     * @return Response
     */
    public function index()
    {
        
        return $this->render('Recycling/recycling.twig');
    }
}