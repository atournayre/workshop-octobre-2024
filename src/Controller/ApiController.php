<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
final class ApiController
{
    #[Route('/api', name: 'api_kernel')]
    public function __invoke(): JsonResponse
    {
        return new JsonResponse([
            'foo' => 'bar',
        ]);
    }
}
