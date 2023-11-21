<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Usuarios</title>
</head>

<body>
    <?php if (isset(session()->user)) { ?>
        <h1>Bienvenidx <?= session()->name ?></h1>
        <br>
        <a href="logout">Cerrar sesión</a>
    <?php } ?>

    <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $field => $error) : ?>
                <p><?= esc($error) ?></p>
            <?php endforeach ?>
        </div>
    <?php endif ?>