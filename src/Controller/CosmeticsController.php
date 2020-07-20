<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CosmeticsController extends AbstractController
{
    /**
     * @Route("/cosmetics", name="cosmetics")
     * @return Response
     */
    public function index()
    {
        
        return $this->render('DIY/cosmetics.twig');
    }

}