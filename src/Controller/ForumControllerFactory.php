<?php

namespace ZendBricks\BricksGroup\Controller;

use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use ZendBricks\BricksForum\Api\ForumApiInterface;

class ForumControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $api = $container->get(ForumApiInterface::SERVICE_NAME);
        return new $requestedName($api);
    }   
}
