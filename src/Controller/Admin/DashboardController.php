<?php

namespace App\Controller\Admin;

use App\Entity\Order;
use App\Entity\Photo;
use App\Entity\Vertu;
use App\Entity\Pierre;
use App\Entity\Article;
use App\Entity\Chakras;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

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
                ->setTitle('Les pierres de Marie')
                ->renderContentMaximized()
                ->renderSidebarMinimized()
            ;
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
                MenuItem::subMenu("chakras", 'fas fa-atom')->setSubItems([
                    MenuItem::linkToCrud('Liste', 'fas fa-list-ol', Chakras::class),
                    MenuItem::linkToCrud('Nouveau', 'fas fa-plus', Chakras::class)
                        ->setAction('new')
                ]),
                MenuItem::subMenu("photo", 'fa fa-camera-retro')->setSubItems([
                    MenuItem::linkToCrud('Liste', 'fas fa-list-ol', Photo::class),
                    MenuItem::linkToCrud('Nouveau', 'fas fa-plus', Photo::class)
                        ->setAction('new')
                ]),        
                MenuItem::subMenu("article", 'fa fa-key')->setSubItems([
                    MenuItem::linkToCrud('Liste', 'fas fa-list-ol', Article::class),
                    MenuItem::linkToCrud('Nouveau', 'fas fa-plus', Article::class)
                        ->setAction('new')
                ]),           
                MenuItem::subMenu("commande", 'fa fa-money')->setSubItems([
                    MenuItem::linkToCrud('Liste', 'fas fa-list-ol', Order::class),
                    MenuItem::linkToCrud('Nouveau', 'fas fa-plus', Order::class)
                        ->setAction('new')
                ]),
            ];
        } 
}
