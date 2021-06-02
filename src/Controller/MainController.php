<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 1/11/21
 * Time: 12:13 PM
 */

namespace App\Controller;
use App\Application\Sonata\UserBundle\Entity\User;

use App\Entity\CompanySub;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class MainController
{

    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/home", name="home")
     */
    public function homeAction()
    {
        $user = $this->em->getRepository(CompanySub::class)->find(1);

        dump($user->getUser());die;
    }

}