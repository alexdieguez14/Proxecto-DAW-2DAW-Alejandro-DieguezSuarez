<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistroType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $hasher, EntityManagerInterface $em): Response
    {
        $isAdmin = $this->isGranted('ROLE_ADMIN');

        // Si está logueado pero NO es admin, no puede registrar
        if ($this->getUser() && !$isAdmin) {
            return $this->redirectToRoute('app_home');
        }

        $form = $this->createForm(RegistroType::class, null, [
            'is_admin' => $isAdmin,
        ]);

        $success = null;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data  = $form->getData();
            $email = $data['email'];
            $role  = $isAdmin ? $data['role'] : 'ROLE_CLIENTE';

            if ($em->getRepository(User::class)->findOneBy(['email' => $email])) {
                $this->addFlash('error', 'Ya existe un usuario con ese email.');
            } else {
                $user = new User();
                $user->setNombre($data['nombre']);
                $user->setApellidos($data['apellidos']);
                $user->setTelefono($data['telefono'] !== '' ? $data['telefono'] : null);
                $user->setEmail($email);
                $user->setRoles([$role]);
                $user->setPassword($hasher->hashPassword($user, $data['password']));
                $em->persist($user);
                $em->flush();

                $success = 'Usuario creado correctamente.';
                $form = $this->createForm(RegistroType::class, null, ['is_admin' => $isAdmin]);
            }
        }

        return $this->render('register/index.html.twig', [
            'isAdmin'      => $isAdmin,
            'success'      => $success,
            'form'         => $form,
        ]);
    }
}
