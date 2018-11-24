<?php

namespace App\Controller;

use App\basic\AbstractRestController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractRestController
{
    /**
     * @Route("/")
     * @return false|string
     */
    public function postHello()
    {
        return $this->json(['action' => 'hello']);
    }
}