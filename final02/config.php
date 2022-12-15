<?php

// Configura la salida de errores por pantalla
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('SITE_URL', 'http://localhost/final02');
define('SITE_TIMEZONE', 'Australia/Sydney');
define('SITE_LANG', ['es', 'spa', 'es_ES']);

// Conexión a Base de Datos
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'microcms');
define('DB_PORT', '3306');
