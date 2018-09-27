<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Services\Helpers;

class DefaultController extends Controller
{
    
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    public function pruebasAction(){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('BackendBundle:User');
        $users = $user->findAll();
        $helper = $this->get(Helpers::class);
            
            die();
    }
    public function loginAction(Request $request) {
        $helpers = $this->get(Helpers::class);
        $json = $request->get('json',null);
        $data = array('status'=> 'error', 'data'=> 'Send data via Post');
        if($json) {

        } else {

        }
        return $data;
    } 
}
