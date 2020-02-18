<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Entities\Users\User;
use App\Factories\EntityManager as EntityManagerFactory;
use App\Settings\Database as DatabaseSettings;

$entityManagerFactory = new EntityManagerFactory(new DatabaseSettings());
$entityManager = $entityManagerFactory->create();

$userRepository = $entityManager->getRepository(User::class);

/** @var array */
$userList = $userRepository->findAll();

foreach($userList as $user) {
    echo 'Usuario de ID:' . $user->getId() . PHP_EOL;
}
