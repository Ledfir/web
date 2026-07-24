<?php

// Cargar el autoload de Composer
require 'vendor/autoload.php';

// Inicializar la aplicación CodeIgniter
use CodeIgniter\Config\Factories;

// Obtener la conexión a la base de datos
$db = \Config\Database::connect();

echo 'Base de datos conectada: ' . $db->getDatabase() . "\n";
$tables = $db->listTables();
echo "Tablas existentes:\n";
print_r($tables);