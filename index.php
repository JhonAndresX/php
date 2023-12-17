<?php

// Definición de constantes
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

// Carga de archivos de configuración
require_once ROOT . DS . 'config' . DS . 'config.php';

// Autocarga de clases
spl_autoload_register(function ($class) {
    require_once ROOT . DS . 'controller' . DS . $class . '.php';
});

// Controlador principal
$controller = new Controller();

// Acciones
$controller->index();