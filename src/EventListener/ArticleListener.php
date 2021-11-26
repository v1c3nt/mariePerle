<?php

namespace App\EventListener;

use DateTime;
use DateTimeImmutable;
use App\Entity\Article;
use Doctrine\Persistence\Event\LifecycleEventArgs;


class ArticleListener 
{
    public function preUpdate(Article $article, LifecycleEventArgs $args){
      

        $today = new DateTimeImmutable((new DateTime('NOW'))->format('Y-m-d'));

        $article->setUpdateAt($today);
    }
}