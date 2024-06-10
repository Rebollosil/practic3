<?php

namespace Container04fbywN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K_XcjCcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.k.xcjCc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.k.xcjCc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'modalidad' => ['privates', '.errored..service_locator.k.xcjCc.App\\Entity\\Modalidad', NULL, 'Cannot autowire service ".service_locator.k.xcjCc": it references class "App\\Entity\\Modalidad" but no such service exists.'],
            'modalidadRepository' => ['privates', 'App\\Repository\\ModalidadRepository', 'getModalidadRepositoryService', true],
        ], [
            'modalidad' => 'App\\Entity\\Modalidad',
            'modalidadRepository' => 'App\\Repository\\ModalidadRepository',
        ]);
    }
}
