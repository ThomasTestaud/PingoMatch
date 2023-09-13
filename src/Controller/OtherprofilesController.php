<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OtherprofilesController extends AbstractController
{
    #[Route('/otherprofiles', name: 'app_otherprofiles')]
    public function index(): Response
    {
        $jsonFilePath = $this->getParameter('kernel.project_dir') . '/src/JSON/users.json';
        $users = file_get_contents($jsonFilePath);

        return $this->render('otherprofiles/index.html.twig', [
            'users' => $users,
        ]);
    }
}
