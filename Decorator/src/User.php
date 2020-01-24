<?php

namespace App;

class User
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var DateTimeImmutable
     */
    private $dob;

    /**
     * @string
     */
    private $email;

    public function __construct(?int $id, string $username, \DateTimeImmutable $dob, string $email)
    {
        $this->id = $id;
        $this->username = $username;
        $this->dob = $dob;
        $this->email = $email;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getDob(): DateTimeImmutable
    {
        return $this->dob;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
