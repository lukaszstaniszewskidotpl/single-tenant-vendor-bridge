<?php

declare(strict_types=1);

namespace Ferdyrurka\SingleTenantVendorClient;

use Ferdyrurka\SingleTenantVendorClient\CompilerPass\OverrideControllerCompilerPass;
use Ferdyrurka\SingleTenantVendorClient\DependencyInjection\SingleTenantVendorClientExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SingleTenantVendorClientBundle extends AbstractBundle
{
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        $container->addCompilerPass(new OverrideControllerCompilerPass());
    }

    public function getContainerExtension(): ExtensionInterface
    {
        return new SingleTenantVendorClientExtension();
    }
}
