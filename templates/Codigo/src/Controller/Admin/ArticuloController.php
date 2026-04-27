<?php

namespace App\Controller\Admin;

use App\Entity\Articulo;
use App\Form\ArticuloType;
use App\Repository\ArticuloRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/articulos')]
class ArticuloController extends AbstractController
{
    #[Route('', name: 'admin_articulo_index')]
    public function index(ArticuloRepository $repo): Response
    {
        return $this->render('admin/articulo/index.html.twig', [
            'articulos' => $repo->findBy([], ['titulo' => 'ASC']),
        ]);
    }

    #[Route('/nuevo', name: 'admin_articulo_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $articulo = new Articulo();
        $form = $this->createForm(ArticuloType::class, $articulo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($articulo);
            $em->flush();
            $this->addFlash('success', 'Artículo creado correctamente.');
            return $this->redirectToRoute('admin_articulo_index');
        }

        return $this->render('admin/articulo/form.html.twig', [
            'form'   => $form,
            'titulo' => 'Nuevo artículo',
        ]);
    }

    #[Route('/{id}/editar', name: 'admin_articulo_edit')]
    public function edit(Articulo $articulo, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ArticuloType::class, $articulo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Artículo actualizado.');
            return $this->redirectToRoute('admin_articulo_index');
        }

        return $this->render('admin/articulo/form.html.twig', [
            'form'     => $form,
            'titulo'   => 'Editar artículo',
            'articulo' => $articulo,
        ]);
    }

    #[Route('/{id}/eliminar', name: 'admin_articulo_delete', methods: ['POST'])]
    public function delete(Articulo $articulo, Request $request, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete_articulo_' . $articulo->getId(), $request->request->get('_token'))) {
            $em->remove($articulo);
            $em->flush();
            $this->addFlash('success', 'Artículo eliminado.');
        }
        return $this->redirectToRoute('admin_articulo_index');
    }
}
