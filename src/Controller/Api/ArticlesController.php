<?php
namespace App\Controller\Api;

use App\Repository\ArticleRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

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
}