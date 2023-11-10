<div class="container">
    <form action="users/login" method="post">
        <div class="form-group">
            <legend>
                Iniciar Sesión
            </legend>
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <br>

            <label for="password">Contraseña</label>
            <input type="password" pattern="[0-9A-Za-z]{8}" name="password" title="La contraseña debe ser de 8 caracteres alfanuméricos puede contener mayúsculas y minúsculas" required>
            <br>

            <button type="submit" name="submit" class="btn btn-primary">Iniciar sesion</button>
        </div>
    </form>
</div>

<div class="container">
    <?php if(isset(session()->login_error)) { ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->login_error?>
        </div>
   <?php } ?>

</div>

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