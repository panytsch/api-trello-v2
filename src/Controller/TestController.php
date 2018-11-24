<?php

namespace App\Controller;

use App\basic\AbstractRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractRestController
{
    /**
     * @Route("/test")
     * @Method({"POST"})
     * @param Request $request
     * @return false|string
     */
    public function postHello(Request $request)
    {
        $inputData = json_decode($request->getContent(), true);
        arsort($inputData);
        return new JsonResponse($inputData, 200, [
            'Content-Type' => 'application/json; charset=utf-8'
        ]);
    }
}