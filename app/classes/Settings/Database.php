<?php

declare(strict_types=1);

namespace App\Settings;

class Database
{
    private string $charset;
    private string $driver;
    private string $host;
    private string $name;
    private string $password;
    private int $port;
    private string $user;

    public function __construct()
    {
        $data = include __DIR__ . '/../../../config/database.php';

        $this->charset = (string) ($data['charset'] ?? '');
        $this->driver = (string) ($data['driver'] ?? '');
        $this->host = (string) ($data['host'] ?? '');
        $this->name = (string) ($data['name'] ?? '');
        $this->password = (string) ($data['password'] ?? '');
        $this->port = (int) ($data['port'] ?? 0);
        $this->user = (string) ($data['user'] ?? '');
    }

    public function getCharset(): string
    {
        return $this->charset;
    }

    public function getDriver(): string
    {
        return $this->driver;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function getUser(): string
    {
        return $this->user;
    }
}
