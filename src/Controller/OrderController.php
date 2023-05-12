<?php

declare(strict_types=1);

namespace Ferdyrurka\SingleTenantVendorBridge\Controller;

use Ferdyrurka\SingleTenantVendor\Repository\OrderRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    #[Route('/api/single-tenant-vendor-bridge/orders', methods: 'GET')]
    public function index(): Response
    {
        return new Response('Hello from single tenant vendor bridge');
    }
}
