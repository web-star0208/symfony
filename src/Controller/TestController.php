<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    public function number()
    {
        $number = random_int(0, 100);

        return $this->render('number.html.twig', array(
            'number' => $number,
        ));
    }
}