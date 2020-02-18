<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Entities\Users\User;
use App\Factories\EntityManager as EntityManagerFactory;
use App\Settings\Database as DatabaseSettings;

$entityManagerFactory = new EntityManagerFactory(new DatabaseSettings());
$entityManager = $entityManagerFactory->create();

$userRepository = $entityManager->getRepository(User::class);
/** @var User */
$user = $userRepository->findOneBy(['email' => 'joao@email.com']);
$user->setPassword('54321');
$entityManager->flush();

echo 'Usuario atualizado' . PHP_EOL;
