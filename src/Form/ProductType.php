<?php

namespace App\Form;

use App\Entity\Product;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('attr' => array('class' => 'input')))
            ->add('price', IntegerType::class, array('attr' => array('class' => 'input')))
            ->add('category')
            ->add('description', CKEditorType::class)
            ->add('image', FileType::class)
            ->add('save', SubmitType::class, array('label' => 'Save this cat', 'attr' => array('class' => 'product__link')));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            ['data_class' => Product::class]
        );
    }
}