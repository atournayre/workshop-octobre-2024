<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
final class DefaultController
{
    #[Route('/', name: 'app_default')]
    public function __invoke(): Response
    {
        return new Response('Default');
    }
}
