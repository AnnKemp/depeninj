<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DepeninjController extends AbstractController
{
    /**
     * @Route("/depeninj", name="depeninj")
     */
    public function index()
    {
        return $this->render('depeninj/index.html.twig', [
            'controller_name' => 'DepeninjController',
        ]);
    }
}
