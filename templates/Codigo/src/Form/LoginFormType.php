<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoginFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Usuario',
                'attr'  => [
                    'autocomplete' => 'email',
                    'autofocus'    => true,
                    'placeholder'  => 'oportodosabor@gmail.com',
                ],
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Contraseña',
                'attr'  => ['autocomplete' => 'current-password'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Security bundle gestiona su propio CSRF (_csrf_token / authenticate)
            'csrf_protection' => false,
        ]);
    }

    /**
     * Sin prefijo para que los campos se envíen como "email" y "password"
     * (FormLoginAuthenticator los espera sin namespace).
     */
    public function getBlockPrefix(): string
    {
        return '';
    }
}
