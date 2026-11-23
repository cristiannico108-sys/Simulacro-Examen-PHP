<?php
declare(strict_types=1);

namespace Controllers;

class HomeController
{
    public function index(): void
    {
        echo '<h1>Refugio Patitas</h1>';
        echo '<p><a href="' . BASE_URL . 'animales">Ver animales en adopción</a></p>';
    }
}
