<main>
<h1>Gestionar categorias</h1>
<div class="cajitas-grid">
   <?php
while ($category = $categorias->fetch_object()) : ?>
   <div class="cajitas">
   <h1><?=$category->nombre?></h1>
</div>
<?php endwhile;?>
</div>
<div class="button-user">
    <a href="index.php?controller=Categoria&action=añadirCategoria">Agregar categoria</a>
    </div>
    </main>