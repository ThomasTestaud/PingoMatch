<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ScrollPageController extends AbstractController
{
    #[Route('/', name: 'app_scroll_page')]
    public function index(): Response
    {
        // Assuming your JSON file is in the "public" directory of your Symfony project
        $jsonFilePath = $this->getParameter('kernel.project_dir') . '/src/JSON/users.json';

        // Check if the file exists before attempting to read it
        if (file_exists($jsonFilePath)) {
            $users = file_get_contents($jsonFilePath);
            $usersJson = json_encode($users);

            return $this->render('scroll_page/index.html.twig', [
                'users' => json_decode($users),
                'usersJson' => $usersJson
            ]);
        } else {
            // Handle the case where the JSON file does not exist
            return new Response('JSON file not found', Response::HTTP_NOT_FOUND);
        }
    }
}
