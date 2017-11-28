<?php

namespace Louvre\P4Bundle\Controller;

use Louvre\P4Bundle\Entity\Billet;
use Louvre\P4Bundle\Form\BilletType;
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
    public function addAction(Request $request)
    {
        $billet = new Billet();
        $form = $this->get('form.factory')->create(BilletType::class, billet);


        $form = $formBuilder->getForm();

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($billet);
                $em->flush();
                $request->getSession()->getFlashbag()->add('notice', 'Billets reservés.');
                return $this->redirectToRoute('homepage');
            }
        }
        return $this->render('LouvreP4Bundle:Billet:billet.html.twig', array('form' => $form->createView(),
        ));
    }
}
