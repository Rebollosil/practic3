<?php

namespace Container9zYj1Zb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__Ra8kIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..ra8kI_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..ra8kI_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'turno' => ['privates', '.errored..service_locator..ra8kI_.App\\Entity\\Turno', NULL, 'Cannot autowire service ".service_locator..ra8kI_": it references class "App\\Entity\\Turno" but no such service exists.'],
        ], [
            'turno' => 'App\\Entity\\Turno',
        ]);
    }
}
