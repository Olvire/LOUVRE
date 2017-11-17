<?php

namespace Louvre\P4Bundle\Controller;

use Louvre\P4Bundle\Entity\Billet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class BilletController extends Controller
{
    public function indexAction(Request $request)
    {
        $billet = new Billet();

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class,$billet);

        $formBuilder
            ->add('nom',    TextType::class)
            ->add('prenom', TextType::class)
            ->add('age',    TextType::class)
            ->add('quantite',  TextType::class)
            ->add('tarif',  TextType::class)
            ->add('periodicite',  TextType::class)
        ;

        $form = $formBuilder->getForm();

        return $this->render('LouvreP4Bundle:Billet:billet.html.twig', array('form' => $form->createView(),
        ));
    }
}
