<?php

namespace Louvre\P4Bundle\Controller;

use Louvre\P4Bundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ClientController extends Controller
{
    public function addAction(Request $request)
    {
    	$client = new Client();

    	$formBuilder = $this->get('form.factory')->createBuilder(FormType::class,$client);

    	$formBuilder
    		->add('nom',    TextType::class)
    		->add('prenom', TextType::class)
    		->add('age',    NumberType::class)
    		->add('email',  EmailType::class)
    	;

    	$form = $formBuilder->getForm();

    	return $this->render('LouvreP4Bundle:Default:index.html.twig' array('form' => $form->createView(),
    	));
    }
}
