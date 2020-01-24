<?php
require __DIR__ . '/vendor/autoload.php';

use App\User;
use App\UserRepository;

$userRepository = new UserRepository();
$userRepository->persistUser(new User(null, 'foo', new \DateTimeImmutable(), 'foo@bar.com'));
$userRepository->deleteUser(42);
$userRepository->findByEmail('foo@bar.com');
$userRepository->findById(42);
