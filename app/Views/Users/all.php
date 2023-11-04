<?php setlocale(LC_TIME, 'esp'); ?>

<div class="container">
    <form action="users/add" method="post">
        <div class="form-group">
            <legend>
                Nuevo usuario
            </legend>

            <label for="email">Email</label>
            <input type="email" name="email" value="" required>
            <br>

            <label for="password">Contraseña</label>
            <input type="password" pattern="[0-9A-Za-z]{8}" name="password" title="La contraseña debe ser de 8 caracteres alfanuméricos puede contener mayúsculas y minúsculas" required>
            <br>

            <label for="passwordRep">Confirma tu contraseña</label>
            <input type="password" pattern="[0-9A-Za-z]{8}" name="passwordRep" title="La contraseña debe ser de 8 caracteres alfanuméricos puede contener mayúsculas y minúsculas" required>
            <br>

            <button type="submit" name="createUser" class="btn btn-primary">Crear usuario</button>
        </div>
        </form>
</div>

<br>
<h2>Usuarios registrados</h2>
<?php foreach ($users as $item) : ?>
    <div>
        <ul>
            <li><?= $item['email'] ?></li>
            <a href="users/edit/<?= $item['id']?>">Editar</a>
            <a href="users/delete/<?= $item['id']?>">Eliminar</a>
            <ul>
    </div>
<?php endforeach; ?>
</div>