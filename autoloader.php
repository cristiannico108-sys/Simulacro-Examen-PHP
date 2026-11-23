<?php
declare(strict_types=1);

// Convierte el nombre de una clase con namespace en la ruta de su fichero:
// Controllers\ContactoController  →  src/Controllers/ContactoController.php
spl_autoload_register(function (string $clase): void {
    $fichero = __DIR__ . '/src/' . str_replace('\\', '/', $clase) . '.php';
    if (is_file($fichero)) {
        require_once $fichero;
    }
});
