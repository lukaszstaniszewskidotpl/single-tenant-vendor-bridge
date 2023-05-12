<?php

declare(strict_types=1);

namespace Ferdyrurka\SingleTenantVendorBridge;

use Ferdyrurka\SingleTenantVendorBridge\CompilerPass\OverrideControllerCompilerPass;
use Ferdyrurka\SingleTenantVendorBridge\DependencyInjection\SingleTenantVendorBridgeExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SingleTenantVendorBridgeBundle extends AbstractBundle
{
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        $container->addCompilerPass(new OverrideControllerCompilerPass());
    }

    public function getContainerExtension(): ExtensionInterface
    {
        return new SingleTenantVendorBridgeExtension();
    }
}
