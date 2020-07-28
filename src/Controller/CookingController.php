<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CookingController extends AbstractController
{
    /**
     * @Route("/cooking", name="cooking")
     * @return Response
     */
    public function index()
    {
        
        return $this->render('Cooking/cooking.twig');
    }
}