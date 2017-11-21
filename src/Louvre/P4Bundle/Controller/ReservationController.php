<?php

namespace Louvre\P4Bundle\Controller;

use Louvre\P4Bundle\Entity\Reservation;
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

class ReservationController extends Controller
{
    public function indexAction(Request $request)
    {
        $reservation = new Reservation();

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $reservation);

        $formBuilder
            ->add('date',               DateType::class)
            ->add('nom',                TextType::class)
            ->add('prenom',             TextType::class)
            ->add('datedenaissance',    DateType::class)
            ->add('quantite',           TextType::class)
            ->add('email',              TextType::class)
            ->add('periodicite',        TextType::class)
            ->add('Reserver',           SubmitType::class )
            ->getForm();
        ;

        $form = $formBuilder->getForm();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('LouvreP4Bundle:Reservation:reservation.html.twig', array('form' => $form->createView(),
        ));
    }
}
