<?php

namespace Louvre\P4Bundle\Form;

use Louvre\P4Bundle\Repository\CategoryRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class BilletType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',              TextType::class)
            ->add('prenom',           TextType::class)
            ->add('datedenaissance',  TextType::class, array('label' => 'Date de Naissance', 'attr' => array('class' => 'datepicker')))
            ->add('pays',             TextType::class)
            ->add('reduction',        CheckboxType::class, array('label' => 'Tarifs Réduits', 'required' => false))
            ->add('Reserver',         SubmitType::class);
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Louvre\P4Bundle\Entity\Billet'
        ));
    }

}
