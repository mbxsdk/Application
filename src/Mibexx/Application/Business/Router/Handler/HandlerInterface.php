<?php

namespace Mibexx\Application\Business\Router\Handler;


use Mibexx\Application\Business\Application;

interface HandlerInterface
{
    /**
     * @param Application $application
     * @param $route
     * @param callable $callback
     */
    public function handle(Application $application, $route, callable $callback);

    /**
     * @param string $type
     *
     * @return bool
     */
    public function validType($type);



}