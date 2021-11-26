<?php

namespace App\Controller;

use App\Entity\Article;
use DateTime;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SitemapController extends AbstractController
{
    /**
     * @Route("/sitemap.xml", name="sitemap", defaults={"_format"="xml"})
     */
    public function index(Request $request, string $photosSiteMap)
    {
        $hostname = $request->getSchemeAndHttpHost();

        $urls = [];

        $urls[] = ['loc' => $this->generateUrl('home')];
        $urls[] = ['loc' => $this->generateUrl('all_articles')];
        $urls[] = ['loc' => $this->generateUrl('app_login')];

        foreach ($this->getDoctrine()->getRepository(Article::class)->findAll() as $article) {
            $images = [
                'loc' =>  $photosSiteMap . '' . $article->getMainPicture()->getUrl() , // URL to image
                'title' => $article->getTitre()    // Optional, text describing the image
            ];

            $urls[] = [
                'loc' => $this->generateUrl('details_article', [
                    'article' => $article->getId(),
                ]),
                'lastmod' => @$article->getUpdateAt()? : new DateTime(),
                'image' => $images
            ];
        }
            $response = new Response(
                $this->renderView('sitemap/index.html.twig', [
                    'urls' => $urls,
                    'hostname' => $hostname
                ]),
                200
            );

            // Ajout des entêtes
            $response->headers->set('Content-Type', 'text/xml');

            // On envoie la réponse
            return $response;
        
    }
}
