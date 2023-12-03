<?php setlocale(LC_TIME, 'esp'); ?>

<h2>Usuarios registrados</h2>
<?php foreach ($users as $item) : ?>
    <div>
        <ul>
            <li><?= $item['email'] ?></li>
            <a href="edit/<?= $item['id']?>">Editar</a>
            <a href="delete/<?= $item['id']?>">Eliminar</a>
            <ul>
    </div>
<?php endforeach; ?>

