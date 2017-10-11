<?php

namespace Mibexx\Application;


use Mibexx\Application\Business\Application;
use Mibexx\Application\Business\Router\Handler\GetHandler;
use Mibexx\Application\Business\Router\Handler\RouterHandlerCollection;
use Mibexx\Application\Shared\ApplicationConstants;
use Mibexx\Dependency\Business\ContainerInterface;
use Mibexx\Dependency\Business\Provider\AbstractDependencyProvider;

class ApplicationDependencyProvider extends AbstractDependencyProvider
{
    public function defineDependencies(ContainerInterface $container)
    {
        $container[ApplicationConstants::APPLICATION_DEPENDENCY] = function () {
            return new Application();
        };

        $container[ApplicationConstants::ROUTER_HANDLER] = function () {
            $handlerCollection = new RouterHandlerCollection();
            $handlerCollection->add(new GetHandler());

            return $handlerCollection;
        };
    }

}