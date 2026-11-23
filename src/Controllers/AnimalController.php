<?php
declare(strict_types=1);

namespace Controllers;

use Models\AnimalRepository;

class AnimalController
{
    public function index(): void
    {
        $repository = new AnimalRepository();
        $animales = $repository->findAll();
        require BASE_PATH . '/Views/animales/listado.php';
    }

    public function show(string $id): void
    {
        $repository = new AnimalRepository();
        $animal = $repository->findById((int) $id); // Se le hace el casting para evitar error type, ya que de la URL lo saca como String

        //Si alguien escribe /animales/999 --> $animal = null --> error 404 con ErrorController (que vendrá dado en el examen)
        if ($animal === null) {
            http_response_code(404);
            (new ErrorController())->show_error404();
            return;
        }

        require BASE_PATH . '/Views/animales/ficha.php';
    }

    public function porEspecie(string $especie) : void
    {
        $repository = new AnimalRepository();
        $animales = $repository->findByEspecie($especie);
        require BASE_PATH . '/Views/animales/listado.php';
    }
}