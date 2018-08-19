<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

return [
    EntityManager::class => function (\Interop\Container\ContainerInterface $container) {
        $config = Setup::createAnnotationMetadataConfiguration(
            ['app/src/Entity'],
            true,
            null,
            null,
            false
        );

        $connectionParams = [
            'dbname' => getenv('DB_NAME'),
            'user' => getenv('DB_USER'),
            'password' => getenv('DB_PASSWORD'),
            'host' => getenv('DB_HOST'),
            'driver' => 'pdo_mysql',
        ];

        return EntityManager::create($connectionParams, $config);
    },
    'settings.displayErrorDetails' => true
];
