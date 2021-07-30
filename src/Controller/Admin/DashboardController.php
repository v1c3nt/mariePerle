<?php

namespace App\Controller\Admin;

use App\Entity\Pierre;
use App\Entity\Vertu;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin")
     */
    public function index(): Response       
    {
        return parent::index();    }
        public function configureDashboard(): Dashboard
        {
            return Dashboard::new()
                ->setTitle('Les pierres de Marie');
        }
    
        public function configureMenuItems(): iterable
        {
            return [
                MenuItem::subMenu("Pierre", 'fas fa-gem')->setSubItems([
                    MenuItem::linkToCrud('Liste', 'fas fa-list-ol', Pierre::class),
                    MenuItem::linkToCrud('Nouveau', 'fas fa-plus', Pierre::class)
                        ->setAction('new')
                ]),
                MenuItem::subMenu("vertu", 'far fa-smile')->setSubItems([
                    MenuItem::linkToCrud('Liste', 'fas fa-list-ol', Vertu::class),
                    MenuItem::linkToCrud('Nouveau', 'fas fa-plus', Vertu::class)
                        ->setAction('new')
                ]),
            ];
        }
    
}
