<?php

namespace Louvre\P4Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LouvreP4Bundle:Default:index.html.twig');
    }
}
