<?php
namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{

    public function numberAction()
    {
        $number = rand(0, 100);

        return new Response(

        );
    }




}