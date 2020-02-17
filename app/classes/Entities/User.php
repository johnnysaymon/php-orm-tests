<?php

declare(strict_types=1);

namespace App\Entities;

class User
{
    private string $email;
    private string $id;
    private string $password;
    private int $status;
    private string $username;

    public function __construct(
        string $username,
        string $password,
        string $email,
        int $status,
        string $id = ''
    ) {
        $this->email = $email;
        $this->id = $id;
        $this->password = $password;
        $this->status = $status;
        $this->username = $username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }
}
