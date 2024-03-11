<?php

require_once('../vendor/autoload.php');
require_once('../app/Config.php');

use App\Config;

$config = Config::getInstance();

// ligne de 40 tirets pour séparer les tests dans la console
function displayHorizontalLine() {
    echo str_repeat('-', 40) . PHP_EOL; //utilisation de PHP_EOL pour le saut de ligne dans la console
}

// Afficher une valeur contenue dans config.php
$dbUser = $config->get('db')['user'];
echo "DB User: $dbUser" . PHP_EOL; 
displayHorizontalLine();

// Récupérer une seconde instance de Config et vérifier que les deux instances sont identiques
$config2 = Config::getInstance();
var_dump($config === $config2);
displayHorizontalLine();

// Afficher la valeur actuelle de la clé 'db'
$dbConfig = $config->get('db');
echo "Current DB Configuration:" . PHP_EOL;
print_r($dbConfig);
displayHorizontalLine();

// Modifier la valeur de la clé 'db'
$newDbConfig = [
    'host' => 'localhost',
    'user' => 'db_user',
    'pass' => 'pswd1234',
    'name' => 'db_test'
];
$config->set('db', $newDbConfig);

// Afficher la nouvelle valeur de la clé 'db'
$newDbConfig = $config->get('db');
echo PHP_EOL . "Updated DB Configuration:" . PHP_EOL;
print_r($newDbConfig);
displayHorizontalLine();
