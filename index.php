<?php
require_once 'config/database.php';

// Crear una instancia de la clase Database
$database = new Database('localhost', 'root', '', 'miniblog');
$pdo = $database->getConnection();


// Obtener la URL solicitada
$url_obtain = isset($_GET['url']) ? $_GET['url'] : '';


// Definir la ruta base para las vistas
$viewsPath = 'views/';

// Determinar la ruta del archivo basado en la URL
// Si $url_obtain está vacío, redirigir a 'home'
if (empty($url_obtain)) {
    $filePath = $viewsPath . 'home.php';
} else {
    $filePath = $viewsPath . $url_obtain . '.php';
}

// Verificar si el archivo existe
if (file_exists($filePath)) {
    // Incluir el archivo de vista
    include $filePath;
} else {
    // Si el archivo no existe, incluir la página 404
    include $viewsPath . '404.php';
}
