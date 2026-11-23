<?php
declare(strict_types=1);

namespace Models;

class Animal
{
    public function __construct(
        private int $id,
        private string $nombre,
        private string $especie,
        private int $edad,
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getEspecie(): string
    {
        return $this->especie;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }
}
