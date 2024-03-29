<?php

namespace ContainerEGs8xgI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIngredientControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\IngredientController' shared autowired service.
     *
     * @return \App\Controller\IngredientController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/IngredientController.php';

        $container->services['App\\Controller\\IngredientController'] = $instance = new \App\Controller\IngredientController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\IngredientController', $container));

        return $instance;
    }
}
