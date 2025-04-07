<?php
 
 namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Attribute\Route;
 use App\Entity\Article;
 
 #[Route('/article', name: 'article_')]
 class ArticleController extends AbstractController
 {
     #[Route('/list', name: 'index', methods: ['GET'])]
     public function index(EntityManagerInterface $em): Response
     {
        $articles = $em->getRepository(Article::class)->findAll();
        

         return $this->render('pages/article/list.html.twig', [
              'articles' => $articles
         ]);
     }
 }