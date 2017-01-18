<?php

namespace Tests\AsseticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestsAsseticBundle:Default:index.html.twig');
    }
    public function devisAction()
    {
        return $this->render('TestsAsseticBundle:Default:devis.html.twig');
    }
    public function assistanceAction()
    {
        return $this->render('TestsAsseticBundle:Default:assistance.html.twig');
    }
    public function connexionAction()
    {
        return $this->render('TestsAsseticBundle:Default:connexion.html.twig');
    }
}
