<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Batch_cookingController extends AbstractController
{
    /**
     * @Route("/batch_cooking", name="batch_cooking")
     * @return Response
     */
    public function index()
    {
        
        return $this->render('Cooking/batch_cooking.twig'); 
    }

}