<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class Mine extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function HomePage(): Response
    {
        return $this->render('me.html.twig', [
            'name' => 'Zakarias',
            'smeknamn' => 'Zack'
        ]);
    }


    /**
     * @Route("/about", name="about")
     */
    public function About(): Response
    {
        return $this->render('about.html.twig', [
            'om' => 'Denna webbplatsen är en del av kursen'
        ]);
    }



    /**
     * @Route("/report", name="report")
     */
    public function Report(): Response
    {
        return $this->render('report.html.twig', );
    }
}
