<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Household_productController extends AbstractController
{
    /**
     * @Route("/household_product", name="household_product")
     * @return Response
     */
    public function index()
    {
        
        return $this->render('DIY/household_product.twig');
    }

}