<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /**
     * @Route("/tous-nos-articles", name="all_articles")
     */
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'Tous nos Articles',
            'articles' => $articleRepository->find20(),
            'next' => 1,
        ]);
    }

    /**
     * @Route("/tous-nos-articles/page{page}", name="scroll_articles")
     */
    public function pageArticle(Int $page, ArticleRepository $articleRepository): Response
    {
        return $this->render('article/_article.html.twig', [
            'articles' => $articleRepository->find20($page),
            'next' => $page + 1
        ]);
    }

    /**
    * @Route("/detail-article/{article}", name="details_article", methods={"GET"})
    */
    public function displayDetails(Article $article)
    {
        return $this->render('article/details.html.twig', [
            'article' => $article,
        ]);
    }

    /**
    * @Route("/detail-article-modal/{article}", name="details_article_modal", methods={"GET"})
    */
    public function displayDetailsInModal(Article $article)
    {
        return $this->render('article/partials/_details.twig', [
            'article' => $article,
        ]);
    }
}
