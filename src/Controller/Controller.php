<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class IndexController extends AbstractController
{
    public function inicio(MailerInterface $mailer)
    {
        $session = new Session();
        $session->clear();
        $conn = $this->getDoctrine()->getConnection();
        $request = Request::createFromGlobals();

        return $this->render("index.html.twig", []);
    }

    public function index(Request $request)
    {
        return $this->render("index.html.twig", []);
    }
}
?>