<?php

namespace ClothstudioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class CustomerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             ->add('cFacebookID',TextType::class,array('label'=>'FacebookID'))
            ->add('cTwitterID',TextType::class,array('label'=>'TwitterID'))
            ->add('cFirstName',TextType::class)
            ->add('cLastName',TextType::class)
            ->add('cPhone',TextType::class)
            ->add('cZip',TextType::class)
            ->add('cEmail',EmailType::class)
            ->add('cPassword',PasswordType::class)
            ->add('cGender',TextType::class)
            ->add('cHeight',TextType::class)
            ->add('cWeight',TextType::class)
            ->add('cTopSize',TextType::class)
            ->add('cDressSize',TextType::class)
            ->add('cBraSize',TextType::class)
            ->add('cPantSize',TextType::class)
            ->add('cWaistSize',TextType::class)
            ->add('cShoesSize',TextType::class)
            ->add('cBodyShape',TextType::class)
            ->add('cLikeStyles',TextType::class)
            ->add('cLikeColorPalettes',TextType::class)
            ->add('cIdeallySpentForCategories',TextType::class)
            ->add('cCreatedDate', DateTimeType::class)
            ->add('cStatus',TextType::class)
            ->add('profilePicture')
          
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ClothstudioBundle\Entity\Customer'
        ));
    }
    
}
