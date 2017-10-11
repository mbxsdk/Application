<?php

namespace Mibexx\Application\Business\Router\Handler;


use Mibexx\Application\Business\Application;
use Mibexx\Router\Provider\RouteProvider;

class PutHandler implements HandlerInterface
{
    /**
     * @param Application $application
     * @param $route
     * @param callable $callback
     */
    public function handle(Application $application, $route, callable $callback)
    {
        $application->put($route, $callback);
    }

    /**
     * @param string $type
     *
     * @return bool
     */
    public function validType($type)
    {
        return ($type === RouteProvider::ROUTE_PUT);
    }

}