<?php

declare(strict_types=1);

namespace Ferdyrurka\SingleTenantVendorBridge;

use Ferdyrurka\SingleTenantVendorBridge\DependencyInjection\SingleTenantVendorBridgeExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SingleTenantVendorBridgeBundle extends AbstractBundle
{
    public function getContainerExtension(): ExtensionInterface
    {
        return new SingleTenantVendorBridgeExtension();
    }
}
