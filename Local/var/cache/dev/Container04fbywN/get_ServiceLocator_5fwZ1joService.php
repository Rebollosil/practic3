<?php

namespace Container04fbywN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5fwZ1joService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5fwZ1jo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5fwZ1jo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'revistum' => ['privates', '.errored..service_locator.5fwZ1jo.App\\Entity\\Revista', NULL, 'Cannot autowire service ".service_locator.5fwZ1jo": it references class "App\\Entity\\Revista" but no such service exists.'],
        ], [
            'revistum' => 'App\\Entity\\Revista',
        ]);
    }
}
