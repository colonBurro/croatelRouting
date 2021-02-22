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
     * @Route("/outside-broadcasting", name="outside-broadcasting")
     */
    public function outsideBroadcasting(): Response
    {
        return $this->render('pages/outside-broadcasting.html.twig');
    }
    
    /**
     * @Route("/playout-facility", name="playout-facility")
     */
    public function playoutFacility(): Response
    {
        return $this->render('pages/playout-facility.html.twig');
    }
    
    /**
     * @Route("/microwawe-and-satelite-communications", name="microwawe-and-satelite-communications")
     */
    public function microwaweAndSateliteCommunications(): Response
    {
        return $this->render('pages/microwawe-and-satelite-communications.html.twig');
    }
    
    /**
     * @Route("/augmented-reality", name="augumented-reality")
     */
    public function augumentedReality(): Response
    {
        return $this->render('pages/augumented-reality.html.twig');
    }

    /**
     * @Route("/partners", name="partners")
     */
    public function partners(): Response
    {
        return $this->render('pages/partners.html.twig');
    }

    /**
     * @Route("/partners/croatian-telecom", name="partner-croatian-telecom")
     */
    public function partnerCroatianTelecom(): Response
    {
        return $this->render('pages/partner-croatian-telecom.html.twig');
    }

    /**
     * @Route("/partners/croatian-radiotelevision", name="partner-croatian-radiotelevision")
     */
    public function partnerCroatianRadiotelevision(): Response
    {
        return $this->render('pages/partner-croatian-radiotelevision.html.twig');
    }

    /**
     * @Route("/partners/arena-sport", name="partner-arena-sport")
     */
    public function partnerArenaSport(): Response
    {
        return $this->render('pages/partner-arena-sport.html.twig');
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
