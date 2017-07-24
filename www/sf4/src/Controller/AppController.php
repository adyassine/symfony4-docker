<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AppController
{

    /**
     * @param Request $request
     * @param $name
     * @return Response
     */
    public function indexAction(Request $request, $name)
    {
        return new Response('Hello '.$name);
    }

}