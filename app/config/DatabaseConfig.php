<?php

namespace App\Config;
use PDO;
class DatabaseConfig {
    public static function getConfig(): array {
        return [
            'host' => 'localhost',
            'database' => 'seu_banco',
            'username' => 'seu_usuario',
            'password' => 'sua_senha',
            'charset' => 'utf8mb4',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]
        ];
    }
}