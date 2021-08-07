<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
    * @Route("/", name="home", methods={"GET","POST"})
    */
    public function index()
    {
        return $this->render('home.html.twig');
    }
}