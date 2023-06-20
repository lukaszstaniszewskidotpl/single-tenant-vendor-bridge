<?php

declare(strict_types=1);

namespace Ferdyrurka\SingleTenantVendorClient\CompilerPass;

use Ferdyrurka\SingleTenantVendorClient\Controller\TransportController;
use Ferdyrurka\SingleTenantVendor\Controller\TransportController as BaseTransportController;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OverrideControllerCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        $container->setDefinition(
            BaseTransportController::class,
            $container->getDefinition(TransportController::class),
        );
    }
}
