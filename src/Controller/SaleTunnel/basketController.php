<?php
namespace App\Controller\SaleTunnel;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class basketController extends AbstractController
{
    /**
    * @Route("/ajouter/{article}", name="add_article", methods={"GET","POST"})
    */
    public function addArticle( $article)
    {
        ;
    }
}