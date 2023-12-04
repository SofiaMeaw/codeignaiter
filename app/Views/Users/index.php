<?php setlocale(LC_TIME, 'esp'); ?>

    <h2>Tus Imagenes</h2>
  
<ul class="image-gallery">
    <?php foreach ($files as $file) : ?>
        <li class="gallery-item">
            <a 
                href="/project-root/public/uploads/<?= $user['id'].'/'.$file?>" 
                class="glightbox" 
                data-gallery="gallery1"
                data-title="<?= $file?>"
            >
                <img src="/project-root/public/uploads/<?= $user['id'].'/'.$file?>" height="100" width="100" alt="image"/>
            </a>
            
            <a href="delete_image/<?= $user['id']?>/<?=$file?>" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Eliminar</a>
        </li>
    <?php endforeach; ?>
</ul>

</fieldset>
    <form action="add_image/<?= $user['id']?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="500000" />

        <div class="input-group">
        <input type="file" name="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Subir</button>
        </div>

    </form>
    </fieldset>

