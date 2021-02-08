<?php

namespace App\Controller\Admin;

use App\Entity\CroatelReference;
use App\Entity\Event;
use App\Entity\User;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Croatel admin');
    }

    public function configureMenuItems(): iterable
    {
        //TODO: remove dashboard link or setup a landing page
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Reference', 'fas fa-video', CroatelReference::class)
            ->setDefaultSort(['year' => 'DESC']);
        yield MenuItem::linkToCrud('Događanja', 'fas fa-compass', Event::class);
        yield MenuItem::section('Korisnici');
        yield MenuItem::linkToCrud('Korisnici', 'fas fa-user', User::class);
    }
    public function configureUserMenu(UserInterface $user): UserMenu
    {
        return parent::configureUserMenu($user)
            ->setName($user->getEmail())
            ->displayUserAvatar(false)
            // you can use any type of menu item, except submenus
            ->addMenuItems([
                MenuItem::linkToRoute('Moj profil', 'fa fa-id-card', '...', ['...' => '...']),
                MenuItem::section(),
                MenuItem::linkToLogout('Odjava', 'fa fa-sign-out'),
            ]);
    }
}
