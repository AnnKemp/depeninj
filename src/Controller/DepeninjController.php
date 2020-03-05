<?php

declare(strict_types = 1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Transform;
use App\Entity\Master;


class DepeninjController extends AbstractController
{
    /**
     * @Route("/depeninj", name="depeninj")
     */
    public function index()
    {
        return $this->render('depeninj/index.html.twig', [
            'controller_name' => 'DepeninjController',
            'tekst'=> $this->thetext,
        ]);

    } // end public function index
} // end of the class