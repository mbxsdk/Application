<?php

namespace Mibexx\Application;

use Mibexx\Kernel\Business\Locator\Module\AbstractFacade;

/**
 * @method \Mibexx\Application\ApplicationFactory getFactory()
 */
class ApplicationFacade extends AbstractFacade
{
    /**
     * Run the silex application
     */
    public function runApplication()
    {
        $this->getFactory()->getApplication()->run();
    }

    /**
     * @param $route
     * @param $type
     * @param callable $callback
     */
    public function addRoute($route, $type, callable $callback)
    {
        $this->getFactory()->getRouteHandler()->handleRoute($route, $type, $callback);
    }
}