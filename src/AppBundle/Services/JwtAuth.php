<?php

namespace AppBundle\Services;

use Firebase\JWT\JWT;
class JwtAuth
{ 
    public $manager;
    public $key;
    public function __construct($manager){
        $this->manager = $manager;
        $this->key = "holaquetalsoylaclavesecreta12345";
    } 
    public function signup($iduser,$password, $getHash = null)
    {   
         $user = $this->manager->getRepository('BackendBundle:User')->findOneBy(array(
        "id_user" => $iduser,
        "password" =>$password
    ));
    $signup  = false;
        if(is_object($user))
        {
            $signup = true;
        }
        if ($signup == true)
        {   
            $token = array(
                "id_user" => $user->getIdUser(),
                "name" => $user->getName(),
                "rol" => $user->getRol(),
                "lastname" => $user->getLastname(),
                "mail" => $user->getMail(),
                "cod_int_usr" => $user->getCodIntUsr(),
                "exp" => time()+(7*24*60*60)

            );
            $jwt = JWT::encode($token,$this->key,'HS256');
            $deconded = JWT::decode($jwt,$this->key,array('HS256'));
            if($getHash ==null){
                $data = $jwt;
            }
            else{
                $data = $deconded;
            }
            
            return $data;
        }else{
            $data = array (
                "status"=> "error",
                "user" => "Login Failed"
        
            );
        }
        return $data;
    }
    public function checkToken($jwt,$getIdentity = false){
        $auth = false;
        try
        {
            $decoded = JWT::decode($jwt,$this->key,array('HS256'));
        }
        catch(\UnexpectedValueException $e)
        {
            $auth = false;
        }
        catch (\DomainException $e)
        {
            $auth = false;
        }
        if(isset($decoded) && is_object($decoded) && isset($decoded->mail)){
            $auth = true;
        }
        else{
            $auth = false;
        }
        if($getIdentity == false){
            return $auth;
        }else{
            return $decoded;
        }
    }
}