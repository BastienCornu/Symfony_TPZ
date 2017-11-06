<?php
/**
 * Created by PhpStorm.
 * User: bastien.cornu
 * Date: 06/11/17
 * Time: 16:08
 */

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{

    /**
     * @Route("/user", name="app_user_createuser")
     */
    private function createUser(){
        $users[] = new User("1","Cornu","Bastien","bast-du-62110@hotmail.fr","BastienCornu/Symfony_TPZ");
        $users[] = new User("1","Test","Henry","yj-du-62110@hotmail.fr","Henry/Symfony_TPZ");

        var_dump($users);
        return $users;
    }

    /**
     * @Route("user/show/{id}", name="app_user_show")
     */
    function show($id){
    }

    /**
     * @Route("/index", name="app_user_index")
     */
    function index(){
        $users = $this->createUser();
        return $this->render("User/index.html.twig",['users'=>$users]);
    }

}