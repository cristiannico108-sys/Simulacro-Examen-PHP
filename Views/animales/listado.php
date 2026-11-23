<h1>Animales en adopción</h1>

<?php if (empty($animales)): ?>
    <p>No hay animales de esa especie</p>
<?php else: ?>
    <table border="1" cellpadding="6">
        <tr>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Edad</th>
        </tr>
        <?php foreach ($animales as $animal): ?>
            <tr>
                <td>
                    <a href="<?= BASE_URL ?>animales/<?= $animal->getId() ?>">
                        <?= htmlspecialchars($animal->getNombre()) ?>
                    </a>
                </td>
                <td><?= htmlspecialchars($animal->getEspecie()) ?></td>
                <td><?= $animal->getEdad() ?> años</td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>