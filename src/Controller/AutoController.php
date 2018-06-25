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
        $article = "Для упрощения работы со всей периферией микроконтроллера, (таймеры, UART, SPI итд) компания ST придумала библиотеку под названием stdperiph_lib. Раньше я почему-то старался не использовать  её, но сейчас я осознал, что с её использованием код становится более понятным и читаемым + улучшается переносимость кода с одного STM32 контроллера на другой. Из-за этого, начиная с этой статьи, я буду использовать эту библиотеку для инициализации периферии. Чтоб понять как использовать SPI, крайне желательно ознакомиться со всеми регистрами через которые происходит взаимодействие с ним. Их как обычно достаточно много, но если разобраться, то ничего особо сложного в них нет. По идее библиотека stdperiph_lib как раз и предназначена для того, чтоб избавить программиста от необходимости напрямую взаимодействовать с регистрами настройки периферии, но я считаю что нужно иметь хотя-бы примерное представление о том, что и как она настраивает. ";

        return $this->render('auto.html.twig', array(
            'number' => $number,
            'article' => $article
            ));
    }
}

?>