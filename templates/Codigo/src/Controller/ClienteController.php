<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/cliente')]
class ClienteController extends AbstractController
{
    #[Route('', name: 'app_cliente')]
    public function index(): Response
    {
        return $this->render('cliente/index.html.twig');
    }
}
