<?php

namespace ZendBricks\BricksForum;

use ZendBricks\BricksGroup\Controller\ForumControllerFactory;

return [
    'factories' => [
        Controller\ForumCategoryController::class => ForumControllerFactory::class,
        Controller\ForumController::class => ForumControllerFactory::class,
        Controller\ForumPostController::class => ForumControllerFactory::class,
        Controller\ForumThreadController::class => ForumControllerFactory::class,
    ]
];