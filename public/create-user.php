<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use App\Entities\Users\User;
use App\Factories\EntityManager as EntityManagerFactory;
use App\Settings\Database as DatabaseSettings;

$user = new User('joao', '12345', 'joao@email.com', 1);

$entityManagerFactory = new EntityManagerFactory(new DatabaseSettings());
$entityManager = $entityManagerFactory->create();
$entityManager->persist($user);
$entityManager->flush();

echo 'Usuario criado com o ID:' . $user->getId() . PHP_EOL;
