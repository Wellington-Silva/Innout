<?php
require_once(dirname(__FILE__, 2) . '/src/config/config.php');

// Define a rota URI a partir do REQUEST_URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 

// Remove o BASE_URL da URL (ex: /day_records)
if (strpos($uri, BASE_URL) === 0) {
    $uri = substr($uri, strlen(BASE_URL));
}

// Limpa o URI (ex: day_records)
$uri = trim($uri, '/'); 


if ($uri === '') {
    $uri = 'day_records';
}

// Para evitar que o nome final fique duplicado
if (substr($uri, -10) === 'Controller') { // 'Controller' tem 10 caracteres
    $uri = substr($uri, 0, -10);
}

// Converte para PascalCase se tiver underscores
$controllerBaseName = str_replace(' ', '', ucwords(str_replace('_', ' ', $uri)));

// Garante que o sufixo Controller.php seja adicionado apenas uma vez
$controllerName = $controllerBaseName . 'Controller.php';

// Caminho completo
$controllerFile = CONTROLLER_PATH . '/' . $controllerName;

if (file_exists($controllerFile)) {
    require_once($controllerFile);
} else {
    echo "Rota não encontrada: $controllerFile";
    exit;
}
