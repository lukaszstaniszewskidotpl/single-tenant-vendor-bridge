<?php

declare(strict_types=1);

namespace Ferdyrurka\SingleTenantVendorBridge\Repository;

use Ferdyrurka\SingleTenantVendor\Repository\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface
{
    public function findAll(): array
    {
        return [
            'data from single tenant vendor bridge',
        ];
    }
}

