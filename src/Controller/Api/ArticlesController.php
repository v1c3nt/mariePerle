<?php

namespace App\Controller\Api;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticlesController extends AbstractController
{
    private $normalizer;
    private $articleRepository;

    public function __construct(NormalizerInterface $normalizer, ArticleRepository $articleRepository)
    {
        $this->normalizer = $normalizer;
        $this->articleRepository = $articleRepository;
    }

    /**
     * @Route("/api/articles", name="articles", methods={"GET"})
     */
    public function apiArticles()
    {
        $articles = $this->articleRepository->findAll();
        $articlesNormalize = $this->normalizer->normalize($articles, null, ['groups' => 'get:article']);

        return $this->json($articlesNormalize, 201);
    }

    /**
     * @Route("/api/article/artilce", name="articles", methods={"GET"})
     */
    public function apiArticle(Article $article)
    {
        
        $articleNormalize = $this->normalizer->normalize($article, null, ['groups' => 'get:article']);

        return $this->json($articleNormalize, 201);
    }
}
