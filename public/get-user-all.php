<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Entities\User;
use App\Factories\EntityManager as EntityManagerFactory;
use App\Settings\Database as DatabaseSettings;

$entityManagerFactory = new EntityManagerFactory(new DatabaseSettings());
$entityManager = $entityManagerFactory->create();

$userRepository = $entityManager->getRepository('App\Entities\User');

/** @var array */
$userList = $userRepository->findAll();

foreach($userList as $user) {
    echo 'Usuario de ID:' . $user->getId() . PHP_EOL;
}
