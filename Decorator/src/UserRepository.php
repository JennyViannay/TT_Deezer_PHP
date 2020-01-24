<?php

namespace App;

class UserRepository implements UserRepositoryInterface
{
    public function persistUser(User $user): void
    {
        echo "Persisting user {$user->getUsername()}\n";
    }

    public function deleteUser(int $id): void
    {
        echo "Deleting user with id $id \n";
    }

    public function findByEmail(string $email): User
    {
        echo "Find user by email $email\n";
        return new User(
            42,
            'jdoe',
            new \DateTimeImmutable(),
            $email
        );
    }

    public function findById(int $id): User
    {
        echo "Find user by email $id\n";
        return new User(
            $id,
            'ldoe',
            new \DateTimeImmutable(),
            'ldoe@foo.com'
        );
    }
}
