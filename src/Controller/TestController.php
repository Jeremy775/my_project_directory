<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function index()
    {
        var_dump("Bienvenue !");
        die();
    }

    public function test(Request $request, $age)
    {

        // $request = Request::createFromGlobals(); => ce qu'il y a en param 

        // $age = $request->attributes->get('age', 0);

        return new Response("Vous avez $age ans ");
    }
}
