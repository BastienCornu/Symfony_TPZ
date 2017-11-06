<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Created by PhpStorm.
 * User: bastien.cornu
 * Date: 06/11/17
 * Time: 13:32
 */
class HelloController extends Controller
{
    public function Hello(){
        return new Response('<html><body><h1>Hello</h1></html></body></h1></body>');
    }

    /**
     * @return Response
     * @Route ("/bonjour", name="app_hello_bonjour")
     */
    public function Bonjour(){
        return $this->render('Hello/page2.html.twig');
    }

    /**
     * @return Response
     * @Route ("/twig", name="app_hello_utilisationtwig")
     */
    public function utilisationTwig(){
        return $this->render('Hello/page1.html.twig');
    }
}