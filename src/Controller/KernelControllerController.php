<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
final class KernelControllerController
{
    #[Route('/admin', name: 'app_kernel_admin')]
    public function __invoke(): Response
    {
        return new Response('Admin');
    }
}
