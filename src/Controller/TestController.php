<?php

namespace App\Controller;

use App\basic\AbstractRestController;
use App\Entity\Users;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractRestController
{
    /**
     * @Route("/test")
     * @Method({"GET"})
     * @return false|string
     */
    public function postHello()
    {
        $user = new Users();
        $user->setEmail('kek');
        $user->setName('roma');
        $user->setPassword('pass');
        $user->setSurname('pan');
        $user->setToken('token');
        $manager = $this->getDoctrine()->getManager();
        $manager->persist($user);
        $manager->flush();
        return new JsonResponse(['status' => true], 200, [
            'Content-Type' => 'application/json; charset=utf-8'
        ]);
    }
}