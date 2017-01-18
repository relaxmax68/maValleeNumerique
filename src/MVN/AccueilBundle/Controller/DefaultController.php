<?php

namespace MVN\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MVNAccueilBundle:Default:index.html.twig');
    }
    public function devisAction()
    {
        return $this->render('MVNAccueilBundle:Default:devis.html.twig');
    }
    public function assistanceAction()
    {
        return $this->render('MVNAccueilBundle:Default:assistance.html.twig');
    }
    public function connexionAction()
    {
        return $this->render('MVNAccueilBundle:Default:connexion.html.twig');
    }
}
