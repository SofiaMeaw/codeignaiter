<div class="container">
    <form action="/project-root/public/users/update/<?= $users['id']?>" method="post">
        <div class="form-group">
            <legend>
                Editar usuario
            </legend>

            <label for="email">Email</label>
            <input type="email" name="email" value="<?= $users['email']?>" required>
            <br>

            <label for="name">Nombre</label>
            <input type="text" name="name" value="<?= $users['name']?>" required>
            <br>

            <label for="password">Contraseña</label>
            <input type="password" pattern="[0-9A-Za-z]{8}" name="password" value="<?= $users['password']?>" title="La contraseña debe ser de 8 caracteres alfanuméricos puede contener mayúsculas y minúsculas" required>
            <br>

            <label for="passwordRep">Confirma tu contraseña</label>
            <input type="password" pattern="[0-9A-Za-z]{8}" name="passwordRep" value="<?= $users['password']?>" title="La contraseña debe ser de 8 caracteres alfanuméricos puede contener mayúsculas y minúsculas" required>
            <br>

            <button type="submit" name="editUser" class="btn btn-primary">Editar usuario</button>
        </div>
        </form>
</div>
