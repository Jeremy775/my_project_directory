<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function hello($name)
    {
        // dd("hello world !");
        return new Response("Hello $name ! ");
    }
}
