<?php

declare(strict_types=1);

namespace Ferdyrurka\SingleTenantVendorClient\Repository;

use Ferdyrurka\SingleTenantVendor\Repository\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface
{
    public function findAll(): array
    {
        return [
            'data from single tenant vendor Client',
        ];
    }
}

