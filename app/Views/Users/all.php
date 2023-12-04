<?php setlocale(LC_TIME, 'esp'); ?>

<h2>Usuarios registrados</h2>
<?php foreach ($users as $item) : ?>
    <div>
        <ul>
            <li>
                <?= $item['name'] ?> / <?= $item['email'] ?>
                <a href="edit/<?= $item['id']?>" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Editar</a>
                <a href="delete/<?= $item['id']?>" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Eliminar</a>
            </li>
        </ul>
    </div>
<?php endforeach; ?>

