<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class RecipesController extends AbstractController
{
    /**
     * @Route("/recipes", name="recipes")
     * @return Response
     */
    public function index()
    {
        
        return $this->render('Cooking/recipes.twig'); 
    }

}