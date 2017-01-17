<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/mail")
     */
    public function mailAction(Request $request)
    {
        // Create a message
        $message = \Swift_Message::newInstance('Wonderful Subject')
          ->setFrom(array('maxime.code@bbox.fr' => 'Maxime Code'))
          ->setTo(array('maxime.public@bbox.fr'))
          ->setBody('Here is the message itself');

        // Send the message
        $this->get('mailer')->send($message);   

        return new Response('<html><body>Mail envoyé !</body></html>');
    } 
}
