<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 1/11/21
 * Time: 12:13 PM
 */

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController
{


    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
       die('1');
    }


}