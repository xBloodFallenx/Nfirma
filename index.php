<?php

require_once "controllers/Logins.php";

$controllerName = isset($_REQUEST['c']) ? $_REQUEST['c'] : 'Logins';
$controllerFile = "controllers/" . $controllerName . ".php";

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controller = new $controllerName;

    $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'main';

    if (method_exists($controller, $action)) {
        call_user_func(array($controller, $action));
    } else {
        echo "Método no encontrado.";
    }
} else {
    echo "Controlador no encontrado.";
}
?>