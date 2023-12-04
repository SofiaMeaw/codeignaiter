<div class="container">
    <form action="/project-root/public/users/update/<?= $user['id']?>" method="post">
        <div class="form-group">
            <legend>
                Editar usuario
            </legend>

            <label for="email">User: <?= $user['email']?></label>
            <br>

            <label for="name">Nombre</label>
            <input type="text" name="name" value="<?= $user['name']?>" required>
            <br>

            <label for="password">Contraseña</label>
            <input type="password" pattern="[0-9A-Za-z]{8}" name="password" value="<?= $user['password']?>" title="La contraseña debe ser de 8 caracteres alfanuméricos puede contener mayúsculas y minúsculas" required>
            <br>

            <label for="passwordRep">Confirma tu contraseña</label>
            <input type="password" pattern="[0-9A-Za-z]{8}" name="passwordRep" value="<?= $user['password']?>" title="La contraseña debe ser de 8 caracteres alfanuméricos puede contener mayúsculas y minúsculas" required>
            <br>

            <button type="submit" name="editUser" class="btn btn-secondary">Editar usuario</button>
        </div>
        </form>
</div>
