<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/logistica')]
class LogisticaController extends AbstractController
{
    #[Route('', name: 'app_logistica')]
    public function index(): Response
    {
        return $this->render('logistica/index.html.twig');
    }
}
