<?php
 
 namespace App\Controller;
 
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\Routing\Attribute\Route;
 
 class DefaultController extends AbstractController
 {
     #[Route('/',name:'index')]
     public function index()
     {
         return $this->render('pages/index.html.twig');
     }
 }