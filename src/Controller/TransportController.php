<?php

declare(strict_types=1);

namespace Ferdyrurka\SingleTenantVendorClient\Controller;

use Ferdyrurka\SingleTenantVendor\Controller\TransportController as Base;
use Symfony\Component\HttpFoundation\Response;

class TransportController extends Base
{
    public function index(): Response
    {
        return new Response('Single tenant vendor Client transports');
    }
}
