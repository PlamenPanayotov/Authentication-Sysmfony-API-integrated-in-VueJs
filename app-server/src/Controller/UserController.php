<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Service\User\UserServiceInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


use Symfony\Component\HttpFoundation\Request;


class UserController extends AbstractController
{
    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }
    
    /**
     * @Route("/login", name="api_login", methods={"POST"})
     */
    public function login()
    {
        return $this->json(['userId' => $this->getUser()->getId(),
                            'userEmail' => $this->getUser()->getEmail()
                            ]);
    }
}
