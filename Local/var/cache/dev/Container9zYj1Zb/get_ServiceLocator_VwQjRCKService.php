<?php

namespace Container9zYj1Zb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VwQjRCKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VwQjRCK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VwQjRCK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'examenFinal' => ['privates', '.errored..service_locator.VwQjRCK.App\\Entity\\ExamenFinal', NULL, 'Cannot autowire service ".service_locator.VwQjRCK": it references class "App\\Entity\\ExamenFinal" but no such service exists.'],
        ], [
            'examenFinal' => 'App\\Entity\\ExamenFinal',
        ]);
    }
}
