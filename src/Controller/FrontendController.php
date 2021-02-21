<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontendController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('pages/index.html.twig');
    }

    /**
     * @Route("/references", name="references")
     */
    public function references(): Response
    {
        return $this->render('pages/references.html.twig');
    }

    /**
     * @Route("/partners", name="partners")
     */
    public function partners(): Response
    {
        return $this->render('pages/partners.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        return $this->render('pages/about.html.twig');
    }

    /**
     * @Route("/sailing", name="sailing")
     */
    public function sailing(): Response
    {
        return $this->render('pages/sailing.html.twig');
    }
}
