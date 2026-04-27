<?php

namespace App\Controller\Admin;

use App\Entity\Categoria;
use App\Form\CategoriaType;
use App\Repository\CategoriaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/categorias')]
class CategoriaController extends AbstractController
{
    #[Route('', name: 'admin_categoria_index')]
    public function index(CategoriaRepository $repo): Response
    {
        return $this->render('admin/categoria/index.html.twig', [
            'categorias' => $repo->findBy([], ['nombre' => 'ASC']),
        ]);
    }

    #[Route('/nueva', name: 'admin_categoria_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $categoria = new Categoria();
        $form = $this->createForm(CategoriaType::class, $categoria);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($categoria);
            $em->flush();
            $this->addFlash('success', 'Categoría creada correctamente.');
            return $this->redirectToRoute('admin_categoria_index');
        }

        return $this->render('admin/categoria/form.html.twig', [
            'form'   => $form,
            'titulo' => 'Nueva categoría',
        ]);
    }

    #[Route('/{id}/editar', name: 'admin_categoria_edit')]
    public function edit(Categoria $categoria, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(CategoriaType::class, $categoria);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Categoría actualizada.');
            return $this->redirectToRoute('admin_categoria_index');
        }

        return $this->render('admin/categoria/form.html.twig', [
            'form'   => $form,
            'titulo' => 'Editar categoría',
        ]);
    }

    #[Route('/{id}/eliminar', name: 'admin_categoria_delete', methods: ['POST'])]
    public function delete(Categoria $categoria, Request $request, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete_categoria_' . $categoria->getId(), $request->request->get('_token'))) {
            $em->remove($categoria);
            $em->flush();
            $this->addFlash('success', 'Categoría eliminada.');
        }
        return $this->redirectToRoute('admin_categoria_index');
    }
}
