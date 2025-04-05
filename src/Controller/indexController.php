<?php
// src/Controller/IndexController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class indexController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {      
       // return new Response('Hello world');
       return $this->render('pages/index.html.twig');
    }

}