<?php

namespace ZendBricks\BricksForum;

use Zend\Mvc\MvcEvent;

class Module
{
    public function getConfig()
    {
        return require __DIR__ . '/../config/module.config.php';
    }

    public function onBootstrap(MvcEvent $e)
    {
        
    }
}
