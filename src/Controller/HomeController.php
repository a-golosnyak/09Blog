<?php

// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
	/**
     * @Route("/", name="/")
     */

    public function number()
    {
        $number = mt_rand(0, 100);

        return $this->render('home.html.twig', array(
            'number' => $number
            ));
    }
}

?>