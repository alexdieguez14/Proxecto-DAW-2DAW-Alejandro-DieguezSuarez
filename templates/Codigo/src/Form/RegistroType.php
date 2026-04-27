<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class RegistroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class, [
                'label' => 'Nombre',
                'attr'  => ['maxlength' => 100],
                'constraints' => [
                    new NotBlank(['message' => 'El nombre es obligatorio.']),
                    new Length(['max' => 100]),
                ],
            ])
            ->add('apellidos', TextType::class, [
                'label' => 'Apellidos',
                'attr'  => ['maxlength' => 150],
                'constraints' => [
                    new NotBlank(['message' => 'Los apellidos son obligatorios.']),
                    new Length(['max' => 150]),
                ],
            ])
            ->add('telefono', TelType::class, [
                'label'    => 'Teléfono (opcional)',
                'required' => false,
                'attr'     => ['maxlength' => 20],
                'constraints' => [
                    new Length(['max' => 20]),
                    new Regex([
                        'pattern' => '/^\+?[\d\s\-()]{6,20}$/',
                        'message' => 'El teléfono no tiene un formato válido.',
                        'match'   => true,
                    ]),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr'  => ['autocomplete' => 'email'],
                'constraints' => [
                    new NotBlank(['message' => 'El email es obligatorio.']),
                    new Email(['message' => 'El email no es válido.']),
                ],
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Contraseña (mín. 8 caracteres)',
                'attr'  => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank(['message' => 'La contraseña es obligatoria.']),
                    new Length([
                        'min'        => 8,
                        'minMessage' => 'La contraseña debe tener al menos {{ limit }} caracteres.',
                    ]),
                ],
            ]);

        if ($options['is_admin']) {
            $builder->add('role', ChoiceType::class, [
                'label'   => 'Rol',
                'choices' => [
                    'Logística'    => 'ROLE_LOGISTICA',
                    'Contabilidad' => 'ROLE_CONTABILIDAD',
                ],
                'placeholder' => '-- Selecciona --',
                'constraints' => [
                    new NotBlank(['message' => 'Debes seleccionar un rol.']),
                ],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'is_admin' => false,
        ]);
    }
}
