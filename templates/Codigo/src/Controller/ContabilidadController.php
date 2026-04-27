<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/contabilidad')]
class ContabilidadController extends AbstractController
{
    #[Route('', name: 'app_contabilidad')]
    public function index(): Response
    {
        return $this->render('contabilidad/index.html.twig');
    }
}
