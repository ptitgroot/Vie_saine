<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Recipes_cookeoController extends AbstractController
{
    /**
     * @Route("/recipes_cookeo", name="recipes_cookeo")
     * @return Response
     */
    public function index()
    {
        
        return $this->render('Cooking/recipes_cookeo.twig'); 
    }

}