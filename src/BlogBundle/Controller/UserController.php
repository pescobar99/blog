<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BlogBundle\Entity\User;
use BlogBundle\Form\UserType;

class UserController extends Controller
{
    /**
     * @Route("/admin/user", name="admin_user_home")
     */
    public function indexAction()
    {
        return $this->render('@Blog/Admin/User/index.html.twig');
    }

    /**
     * @Route("/admin/user/create", name="admin_user_create")
     */
    public function createUserAction(Request $request)
    {

        $user = new User();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        return $this->render('@Blog/Admin/User/create_user.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
