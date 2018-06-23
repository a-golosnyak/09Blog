<?php

// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AutoController extends Controller
{
	/**
     * @Route("/auto", name="auto")
     */

    public function showArticle()
    {
        $number = mt_rand(0, 100);

        return $this->render('auto.html.twig', array(
            'number' => $number
            ));
    }
}

?>