<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(): Response
    {
        $jsonFilePath = $this->getParameter('kernel.project_dir') . '/src/JSON/users.json';
        $users = file_get_contents($jsonFilePath);

        return $this->render('profile/index.html.twig', [
            'users' => $users,
        ]);
    }
}
