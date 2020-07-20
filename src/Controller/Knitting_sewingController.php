<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Knitting_sewingController extends AbstractController
{
    /**
     * @Route("/knitting_sewing", name="knitting_sewing")
     * @return Response
     */
    public function index()
    {
        
        return $this->render('DIY/knitting_sewing.twig');
    }

}