<?php

declare(strict_types=1);

namespace App\Factories;

use App\Settings\Database as SettingsDatabase;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager as EntityManagerDoctrine;

class EntityManager
{
    private SettingsDatabase $settings;

    public function __construct(SettingsDatabase $settings)
    {
        $this->settings = $settings;
    }

    public function create(): EntityManagerDoctrine
    {
        $isDevMode = true;
        $config = Setup::createXMLMetadataConfiguration(array(__DIR__."/../../mapping"), $isDevMode);

        $conn = [
            'charset' => $this->settings->getCharset(),
            'dbname' => $this->settings->getName(),
            'driver' => $this->settings->getDriver(),
            'host' => $this->settings->getHost(),
            'password' => $this->settings->getPassword(),
            'port' => $this->settings->getPort(),
            'user' => $this->settings->getUser(),
        ];

        return EntityManagerDoctrine::create($conn, $config);
    }
}