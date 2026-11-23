<?php
declare(strict_types=1);

namespace Controllers;

class ErrorController
{
    public static function show_error404(): string
    {
        return '<h1>404 - Página no encontrada</h1><p><a href="' . BASE_URL . '">Volver al inicio</a></p>';
    }
}
