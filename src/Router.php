<?php namespace Restly\Routing; 

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Routing\RouteCollection;

class Router implements HttpKernelInterface
{
    /**
     * @var RouteCollection
     */
    protected $routeCollection;

    public function __construct(RouteCollection $routeCollection = null)
    {
        $this->routeCollection = $routeCollection?: new RouteCollection;
    }

    public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = true)
    {
        // TODO: Implement handle() method.
    }
}