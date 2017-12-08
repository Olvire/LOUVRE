<?php

namespace Louvre\P4Bundle\Form;

use Louvre\P4Bundle\Repository\CategoryRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',                TextType::class)
            ->add('prenom',             TextType::class)
            ->add('jourreservation',    TextType::class, array('label' => 'Jour de la Reservation', 'attr' => array('class' => 'datepicker')))
            ->add('email',              TextType::class)
            ->add('quantite',           TextType::class)
            ->add('periodicite',        TextType::class)
            ->add('Reserver',           SubmitType::class);
    }
    

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Louvre\P4Bundle\Entity\Reservation'
        ));
    }
}
