<?php

namespace App\Form;

use App\Entity\Articulo;
use App\Entity\Categoria;
use App\Entity\Proveedor;
use App\Entity\UbicacionAlmacen;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class ArticuloType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titulo', TextType::class, [
                'label' => 'Título',
                'attr'  => ['maxlength' => 200],
                'constraints' => [
                    new NotBlank(['message' => 'El título es obligatorio.']),
                    new Length(['max' => 200]),
                ],
            ])
            ->add('descripcion', TextareaType::class, [
                'label'    => 'Descripción',
                'required' => false,
                'attr'     => ['rows' => 3],
            ])
            ->add('precio', MoneyType::class, [
                'label'    => 'Precio',
                'currency' => 'EUR',
                'constraints' => [
                    new NotBlank(['message' => 'El precio es obligatorio.']),
                    new Positive(['message' => 'El precio debe ser positivo.']),
                ],
            ])
            ->add('peso', NumberType::class, [
                'label' => 'Peso (kg)',
                'scale' => 3,
                'attr'  => ['step' => '0.001'],
                'constraints' => [
                    new NotBlank(['message' => 'El peso es obligatorio.']),
                    new Positive(['message' => 'El peso debe ser positivo.']),
                ],
            ])
            ->add('stock', IntegerType::class, [
                'label' => 'Stock',
                'constraints' => [
                    new NotBlank(),
                    new GreaterThanOrEqual(['value' => 0, 'message' => 'El stock no puede ser negativo.']),
                ],
            ])
            ->add('cantidad', IntegerType::class, [
                'label' => 'Cantidad',
                'constraints' => [
                    new NotBlank(),
                    new GreaterThanOrEqual(['value' => 0, 'message' => 'La cantidad no puede ser negativa.']),
                ],
            ])
            ->add('categoria', EntityType::class, [
                'class'        => Categoria::class,
                'choice_label' => 'nombre',
                'label'        => 'Categoría',
                'placeholder'  => '-- Sin categoría --',
                'required'     => false,
            ])
            ->add('proveedor', EntityType::class, [
                'class'        => Proveedor::class,
                'choice_label' => 'nombre',
                'label'        => 'Proveedor',
                'placeholder'  => '-- Sin proveedor --',
                'required'     => false,
            ])
            ->add('ubicacion', EntityType::class, [
                'class'        => UbicacionAlmacen::class,
                'choice_label' => '__toString',
                'label'        => 'Ubicación en almacén',
                'placeholder'  => '-- Sin ubicación --',
                'required'     => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => Articulo::class]);
    }
}
