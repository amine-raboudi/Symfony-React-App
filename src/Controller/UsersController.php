<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class UsersController
 * @package App\Controller
 * @Route("/list", name="list_")
 */
class UsersController extends AbstractController
{
    /**
     * @Route("/users", name="app_users")
     */
    public function index(): Response
    {
        $users=$this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('users/index.html.twig', [
            'users' => $users
        ]);
    }
}
