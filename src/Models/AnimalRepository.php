<?php
declare(strict_types=1);

namespace Models;

class AnimalRepository
{
    private const FICHERO = BASE_PATH . '/data/animales.json';

    /**
     * Devuelve todos los animales del fichero como objetos Animal.
     *
     * @return Animal[]
     */
    public function findAll(): array
    {
        if (!is_file(self::FICHERO) || !is_readable(self::FICHERO)) {
            throw new \Exception('No se puede leer el fichero de animales');
        }

        $datos = json_decode(file_get_contents(self::FICHERO), true);

        $animales = [];
        foreach ($datos as $fila) {
            $animales[] = new Animal($fila['id'], $fila['nombre'], $fila['especie'], $fila['edad']);
        }
        return $animales;
    }


    /**
     * Busca un animal por su ID. Devuelve null si no existe.
     */
    public function findById(int $id): ?Animal
    {
        foreach ($this->findAll() as $animal) {
            if ($animal->getId() === $id) {
                return $animal;
            }
        }

        return null;
    }

    /**
     * Devuelve todos los animales de una especie concreta.
     *
     * @return Animal[]
     */
    public function findByEspecie(string $especie): array
    {
        $resultado = [];
        foreach ($this->findAll() as $animal) {
            if (strtolower($animal->getEspecie()) === strtolower($especie)) {
                $resultado[] = $animal;
            }
        }

        return $resultado;
    }
}
