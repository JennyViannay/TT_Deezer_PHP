<?php

namespace App;

interface UserRepositoryInterface
{
    public function persistUser(User $user): void;

    public function deleteUser(int $id): void;

    public function findByEmail(string $email): User;

    public function findById(int $id): User;
}
