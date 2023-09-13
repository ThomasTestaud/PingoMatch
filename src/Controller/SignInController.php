<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignInController extends AbstractController
{
    #[Route('/signin', name: 'app_sign_in')]
    public function index(): Response
    {
        $file_path = '/src/JSON/users.json';
        $jsonFilePath = $this->getParameter('kernel.project_dir') . '/src/JSON/users.json';
        $users = json_decode(file_get_contents($jsonFilePath));

        $return = "";
        if(isset($_POST['login']) && isset($_POST['password'])) {
            $users[] = [
                "Name" => $_POST['login'],
                "img" => "https://robotdog.thomastestaud.com/mancho/h.png",
                "Password" => $_POST['password'],
                "Description" => $_POST['description']
            ];

            file_put_contents($jsonFilePath, json_encode($users));

            header("Location: /login");
            exit;
        } else {
            $return = "Vous devez remplir tout les champs";
        }

        return $this->render('sign_in/index.html.twig', [
            'result' => $return,
        ]);
    }
}
