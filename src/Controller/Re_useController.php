<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Re_useController extends AbstractController
{
    /**
     * @Route("/re_use", name="re_use")
     * @return Response
     */
    public function index()
    {
        
        return $this->render('Recycling/re_use.twig');
    }
}