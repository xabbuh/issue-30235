<?php

declare(strict_types = 1);

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function registerUser(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user, [
            'csrf_protection' => false,
        ]);
        $form->submit(['username' => 'foo', 'firstname' => 'bar', 'lastname' => ''], false);

        dump($form->isSubmitted());
        dump($form->isValid());
        dump($user);
        dump($form->getErrors(true));

        return new Response('<html><body></body></html>');
    }
}
