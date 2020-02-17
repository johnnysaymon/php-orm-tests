<?php

declare(strict_types=1);

namespace App\Factories;

use App\Entities\User as UserEntity;

class User
{
    private string $email;
    private string $id;
    private string $password;
    private int $status;
    private string $username;

    public function __construct()
    {
        $this->email = '';
        $this->id = '';
        $this->password = '';
        $this->status = 2;
        $this->username = 'Undefined';
    }

    public function create(): UserEntity
    {
        return new UserEntity(
            $this->username,
            $this->password,
            $this->email,
            $this->status,
            $this->id
        );
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setUser(UserEntity $user): self
    {
        $this->email = $user->getEmail();
        $this->id = $user->getId();
        $this->password = $user->getPassword();
        $this->status = $user->getStatus();
        $this->username = $user->getUsername();

        return $this;
    }
}
