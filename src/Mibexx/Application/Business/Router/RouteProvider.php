<?php

namespace Mibexx\Application\Business\Router;


use Mibexx\Application\Business\Application;
use Mibexx\Application\Business\Router\Handler\RouterHandlerCollection;

class RouteProvider
{
    /**
     * @var Application
     */
    private $application;

    /**
     * @var RouterHandlerCollection
     */
    private $routerHandlerCollection;

    /**
     * RouteProvider constructor.
     *
     * @param Application $application
     * @param RouterHandlerCollection $routerHandlerCollection
     */
    public function __construct(Application $application, RouterHandlerCollection $routerHandlerCollection)
    {
        $this->application = $application;
        $this->routerHandlerCollection = $routerHandlerCollection;
    }

    /**
     * @param string $route
     * @param string $type
     * @param callable $callback
     */
    public function handleRoute($route, $type, callable $callback)
    {
        foreach ($this->routerHandlerCollection as $handler) {
            if ($handler->validType($type)) {
                $handler->handle($this->application, $route, $callback);
            }
        }
    }


}