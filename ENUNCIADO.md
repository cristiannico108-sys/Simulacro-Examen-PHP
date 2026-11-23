# SIMULACRO DWES — Refugio "Patitas"

**Tiempo:** 2 horas · **Sin IA, sin mirar el proyecto videoteca.** Puedes usar el manual de PHP (php.net) y los apuntes de Moodle.

Proyecto: `projects/refugio` → http://refugio.localhost

## Lo que ya está hecho (no hace falta tocarlo salvo que lo necesites)
- Router (`src/Core/Router.php`), `.htaccess`, autoloader, `bootstrap.php` (con `BASE_PATH` y `BASE_URL`).
- `ErrorController::show_error404()`.
- Modelo `Animal` (id, nombre, especie, edad) y `AnimalRepository::findAll()`, que lee `data/animales.json`.
- Ruta `GET animales` → `AnimalController::index()` → vista `Views/animales/listado.php`.

---

## Ejercicio 1 — Ficha de un animal (2 puntos)
1. Ruta `GET animales/:id`.
2. `AnimalRepository::findById(int $id): ?Animal`.
3. `AnimalController::show(...)`: si el animal no existe → código 404 + página de error. Si existe → vista `Views/animales/ficha.php` con nombre, especie y edad.
4. En el listado, el **nombre** de cada animal debe ser un **enlace** a su ficha.

## Ejercicio 2 — Filtrar por especie (1 punto)
1. Ruta `GET animales/especie/:especie` (ej: `animales/especie/gato`).
2. `AnimalRepository::findByEspecie(string $especie): array`.
3. Reutiliza la vista del listado. Si no hay ninguno, muestra: *"No hay animales de esa especie"*.

## Ejercicio 3 — Formulario de alta (3 puntos)
1. Ruta `GET animales/nuevo` → muestra el formulario (`Views/animales/formulario.php`).
2. Ruta `POST animales/guardar` → valida los datos:
   - **nombre**: obligatorio, máximo 30 caracteres.
   - **especie**: un `<select>` con `perro`, `gato`, `conejo`. Solo se aceptan esos tres valores.
   - **edad**: número entero entre 0 y 25.
3. Si hay errores: vuelve a mostrar el formulario con **el error junto a cada campo** y **sin perder lo escrito**.
4. Pon un enlace "Añadir animal" en el listado.

## Ejercicio 4 — Guardar en JSON (2 puntos)
1. `AnimalRepository::save(...)`: añade el animal a `data/animales.json` con un **id nuevo** (el mayor + 1).
2. Tras guardar, muestra el listado (el nuevo animal tiene que aparecer).

## Ejercicio 5 — Foto (1,5 puntos)
1. Añade al formulario un campo para subir una **foto** (obligatoria).
2. Valida: solo JPG, PNG o WEBP (comprobando el **tipo MIME real**) y como máximo **1 MB**.
3. Guárdala en `public/imagenes/` con un **nombre único**.
4. Guarda el nombre en el JSON y añade la foto al modelo `Animal` (los animales antiguos no tienen foto: no deben fallar).
5. Muestra la foto en el listado y en la ficha. Si no tiene → "Sin foto".

## Ejercicio 6 — Buenas prácticas (0,5 puntos)
- El modelo no hace `echo`; las vistas no tienen lógica de negocio.
- `htmlspecialchars()` en todo lo que venga de datos o del usuario.
- Sintaxis alternativa (`foreach:` / `endforeach;`, `if:` / `endif;`) en las vistas.
- Tipos en los métodos (`: void`, `: array`, `?Animal`...).

---
Cuando termines, di **"entregado"**.
