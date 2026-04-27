<?php

namespace App\Controller\Admin;

use App\Entity\Proveedor;
use App\Form\ProveedorType;
use App\Repository\ProveedorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/proveedores')]
class ProveedorController extends AbstractController
{
    #[Route('', name: 'admin_proveedor_index')]
    public function index(ProveedorRepository $repo): Response
    {
        return $this->render('admin/proveedor/index.html.twig', [
            'proveedores' => $repo->findBy([], ['nombre' => 'ASC']),
        ]);
    }

    #[Route('/nuevo', name: 'admin_proveedor_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $proveedor = new Proveedor();
        $form = $this->createForm(ProveedorType::class, $proveedor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($proveedor);
            $em->flush();
            $this->addFlash('success', 'Proveedor creado correctamente.');
            return $this->redirectToRoute('admin_proveedor_index');
        }

        return $this->render('admin/proveedor/form.html.twig', [
            'form'   => $form,
            'titulo' => 'Nuevo proveedor',
        ]);
    }

    #[Route('/{id}/editar', name: 'admin_proveedor_edit')]
    public function edit(Proveedor $proveedor, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ProveedorType::class, $proveedor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Proveedor actualizado.');
            return $this->redirectToRoute('admin_proveedor_index');
        }

        return $this->render('admin/proveedor/form.html.twig', [
            'form'   => $form,
            'titulo' => 'Editar proveedor',
        ]);
    }

    #[Route('/{id}/eliminar', name: 'admin_proveedor_delete', methods: ['POST'])]
    public function delete(Proveedor $proveedor, Request $request, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete_proveedor_' . $proveedor->getId(), $request->request->get('_token'))) {
            $em->remove($proveedor);
            $em->flush();
            $this->addFlash('success', 'Proveedor eliminado.');
        }
        return $this->redirectToRoute('admin_proveedor_index');
    }
}
