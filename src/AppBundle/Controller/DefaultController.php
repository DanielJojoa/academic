<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Services\Helpers;
use AppBundle\Services\JwtAuth;
use Symfony\Component\Validator\Constraints as Assert;

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
            $params = json_decode($json);
            $idUser =(isset($params->iduser)) ? $params->iduser:null;
            $password =(isset($params->password)) ? $params->password:null;
            $getHash =(isset($params->getHash)) ? $params->getHash:null;
            
            $pwd = hash('sha256',$password);
            if( $idUser != null && $password != null) {
                $jwt_auth = $this->get(JwtAuth::Class);
                if ($getHash == null) {
                    $data = $jwt_auth->signup($idUser,$pwd);
                } else {
                    $data = $jwt_auth->signup($idUser,$password,true);
                }
            } else {
                $data = array(
                      'status' =>'error',
                       'data' =>'Password or user  is wrong'
                
                            );
            }
        } 
        return $helpers->json($data);
    } 
}
