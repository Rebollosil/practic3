<?php

namespace Container04fbywN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R4VsjqnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.R4Vsjqn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.R4Vsjqn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'correlativa' => ['privates', '.errored..service_locator.R4Vsjqn.App\\Entity\\Correlativa', NULL, 'Cannot autowire service ".service_locator.R4Vsjqn": it references class "App\\Entity\\Correlativa" but no such service exists.'],
        ], [
            'correlativa' => 'App\\Entity\\Correlativa',
        ]);
    }
}
