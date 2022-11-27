<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class APIController extends AbstractController
{
    /**
     * @Route("/api", name="app_a_p_i")
     */
    public function index(): Response
    {
        $em=$this->getDoctrine()->getManager();
        $users=$this->getDoctrine()->getRepository(User::class)->findAll();
        $data=array();
        foreach ($users as $key=> $user){
            $data[$key]["id"]=$user->getId();
            $data[$key]["email"]=$user->getEmail();
            $data[$key]["password"]=$user->getPassword();
        }
        return new JsonResponse($data);
    }

}
