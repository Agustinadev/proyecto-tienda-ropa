<div class="form-container">
<form action="index.php?controller=producto&action=save" class="form" method="POST" enctype="multipart/form-data">


<?php if (isset($item) && is_object($item)) : ?>
  <h1 class="h2-form">Editar Productos</h1>

<?php  else : ?>
  <h1 class="h2-form">Crear producto</h1>
      
<?php endif; ?>




<label for="categoria_id" class="label"> Id de la categoria</label>
  <select class="input" name="categoria_id" id=""><?php
  $utils = Utils::mostrarCategorias();
  while ($categorias = $utils->fetch_object()) : ?>
   <option class="input" value="<?=$categorias->id?>"><?=$categorias->nombre?></option>
  <?php endwhile; ?>
  </select>

  <label for="" class="label">Nombre</label>
  <input class="input" type="text" name="nombre" value="<?= isset($item) && is_object($item) ? $item->nombre  : '' ?>">

  <label for="" class="label">Descripción</label>
  <textarea class="input" type="text" name="descripcion"><?= isset($item) && is_object($item) ? $item->descripcion  : '' ?></textarea>

  <label for="" class="label">Precio</label>
  <input class="input" type="text" name="precio"  value="<?= isset($item) && is_object($item) ? $item->precio    : '' ?>">

  <label for="" class="label">Oferta</label>
  <input class="input" type="text" name="oferta"  value="<?= isset($item) && is_object($item) ? $item->oferta    : '' ?>">

  <label for=""class="label">Imagen</label>
  <input class="" type="file" name="imagen">

  <label for="" class="label">stock</label>
  <input class="input" type="text" name="stock"  value="<?= isset($item) && is_object($item) ? $item->stock    : '' ?>">

  <input class="input" type="submit">
</form>
</div>