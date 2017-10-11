<?php

namespace Mibexx\Application;


use Mibexx\Application\Business\Application;
use Mibexx\Application\Business\Router\Handler\RouterHandlerCollection;
use Mibexx\Application\Business\Router\RouteProvider;
use Mibexx\Application\Shared\ApplicationConstants;
use Mibexx\Kernel\Business\Locator\Module\AbstractFactory;

class ApplicationFactory extends AbstractFactory
{
    /**
     * @var RouteProvider
     */
    private $routeProvider = null;

    /**
     * @return RouteProvider
     */
    public function getRouteHandler()
    {
        if ($this->routeProvider === null) {
            $this->routeProvider = new RouteProvider(
                $this->getApplication(),
                $this->getRouterHandlerCollection()
            );
        }

        return $this->routeProvider;
    }

    /**
     * @return Application
     */
    public function getApplication()
    {
        return $this->getProvidedDependency(ApplicationConstants::APPLICATION_DEPENDENCY);
    }

    /**
     * @return RouterHandlerCollection
     */
    public function getRouterHandlerCollection()
    {
        return $this->getProvidedDependency(ApplicationConstants::ROUTER_HANDLER);
    }
}