<?php

$auth = new \Horizom\Auth\Auth($authDb, [
    'users' => 'users',
    'confirmations' => 'users_confirmations',
    'remembered' => 'users_remembered',
    'resets' => 'users_resets',
    'throttling' => 'users_throttling',
]);

$auth->setPasswordHashAlgorithm(PASSWORD_DEFAULT);
