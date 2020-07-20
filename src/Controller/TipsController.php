<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TipsController extends AbstractController
{
    /**
     * @Route("/tips", name="tips")
     * @return Response
     */
    public function index()
    {
        
        return $this->render('Cooking/tips.twig'); 
    }

}