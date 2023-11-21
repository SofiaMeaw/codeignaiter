<?php setlocale(LC_TIME, 'esp'); ?>

</fieldset>
    <form action="add_image/<?= $user['id']?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
        <label for="file">Selecciona un archivo jpg</label>
        <br>
        <input type="file" name="file" required>
        <br>
        <button type="submit" name="upload">Subir</button>
        </div>
    </form>
    </fieldset>

    <h2>Archivos</h2>
<?php foreach ($files as $file) : ?>
    <div>
        <ul>
            <li><img src="/project-root/public/uploads/<?= $user['id'].'/'.$file?>" height="100" width="100"><?= $file?></li>
            <a href="delete_image/<?= $user['id']?>/<?=$file?>">Eliminar</a>
            <ul>
    </div>
<?php endforeach; ?>
