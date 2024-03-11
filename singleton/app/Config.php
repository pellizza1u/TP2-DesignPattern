<?php

namespace App;

class Config
{
    private static ?Config $instance = null;
    private array $settings;

    private function __construct()
    {
        // on charge les paramètres depuis le fichier config
        $this->settings = include __DIR__ . '/../config/config.php';
    }

    public static function getInstance(): Config
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function get(string $key)
    {
        return $this->settings[$key] ?? null;
    }

    public function set(string $key, $value): void
    {
        $this->settings[$key] = $value;
    }
}
