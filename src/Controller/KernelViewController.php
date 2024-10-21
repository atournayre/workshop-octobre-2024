<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
final class KernelViewController
{
    #[Route('/api/view', name: 'api_kernel_view')]
    public function __invoke(): array
    {
        return [
            'foo' => 'bar',
        ];
    }
}
