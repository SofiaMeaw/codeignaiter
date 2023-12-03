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
            <li>
                <a src="/project-root/public/uploads/<?= $user['id'].'/'.$file?>" class="glightbox" data-gallery="gallery1">
                    <img src="/project-root/public/uploads/<?= $user['id'].'/'.$file?>" height="100" width="100" alt="image"/>
                </a>
                <?= $file?>
                <a href="delete_image/<?= $user['id']?>/<?=$file?>">Eliminar</a>
            </li>
            
        <ul>
    </div>
<?php endforeach; ?>

<a href="http://localhost/project-root/public/uploads/16/65555f4a7aad5c921d6fe44a_photo_2023-11-15_18-16-01.jpg" class="glightbox" data-gallery="gallery1">
  <img src="http://localhost/project-root/public/uploads/16/65555f4a7aad5c921d6fe44a_photo_2023-11-15_18-16-01.jpg" alt="image" />
</a>
<a href="http://localhost/project-root/public/uploads/16/65555f4a7aad5c921d6fe44a_photo_2023-11-15_18-16-01.jpg" class="glightbox" data-gallery="gallery1">
  <img src="http://localhost/project-root/public/uploads/16/65555f4a7aad5c921d6fe44a_photo_2023-11-15_18-16-01.jpg" alt="image" />
</a>

