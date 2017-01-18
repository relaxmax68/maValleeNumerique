<?php

namespace Tests\AsseticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestsAsseticBundle:Default:index.html.twig');
    }
}
