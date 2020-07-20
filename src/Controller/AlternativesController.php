<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AlternativesController extends AbstractController
{
    /**
     * @Route("/alternatives", name="Alternatives")
     * @return Response
     */
    public function index()
    {
        
        return $this->render('Recycling/alternatives.twig');
    }
}