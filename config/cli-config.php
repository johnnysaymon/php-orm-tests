<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use App\Factories\EntityManager;

$entityManagerFactory = new EntityManager();

return ConsoleRunner::createHelperSet($entityManagerFactory->create());
