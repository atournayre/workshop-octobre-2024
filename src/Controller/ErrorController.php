<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ErrorController extends AbstractController
{
    #[Route('/non-trouve', name: 'app_error_non_trouve')]
    public function nonTrouve(): Response
    {
        return new Response('La page demandée n\'existe pas', Response::HTTP_NOT_FOUND);
    }

    #[Route('/server', name: 'app_error_server')]
    public function server(): Response
    {
        return new Response('Oups, une erreur est survenue.', Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
