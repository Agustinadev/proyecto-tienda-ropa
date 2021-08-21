<h1>Productos</h1>

<?php if (isset($_SESSION['borrar-productos']) && $_SESSION['borrar-productos'] == 'true') :?>

<div class='register'> <h2 class="completed">Se ha borrado tu producto</h2> </div>;

<?php elseif (isset($_SESSION['borrar-productos']) && $_SESSION['borrar-productos'] != 'true') :  ?>

    <div class="register"><h2 class="failed">NO se ha podido borrar tu producto</h2> </div> 
<?php endif;
Utils::delete('borrar-productos');
 ?>


<?php if (isset($_SESSION['producto']) && $_SESSION['producto'] == 'true') :?>

<div class='register'> <h2 class="completed">Se ha creado tu producto</h2> </div>;

<?php elseif (isset($_SESSION['producto']) && $_SESSION['producto'] != 'true') :?>

 <div class="register"><h2 class="failed">NO se ha podido crear tu producto</h2> </div>
<?php endif;
Utils::delete('producto');
?> 

<div class="cajitas-grid">
<?php
while ($product = $productos->fetch_object()) : ?>
   
<div class="cajitas">
<h2 class="haches">Nombre del producto:<br><span><?=$product->nombre?></span></h2>

<h3 class="haches">Categoria:<br><span><?=$product->categoria_id?></span></h3>

<h4 class="haches">Descripción del producto:<br><span><?=$product->descripcion?></span></h4>

<h5 class="haches">Precio del producto:<br><span><?=$product->precio?></span></h5>

<h6 class="haches">Stock del producto:<br><span><?=$product->stock?></span></h6>
</div>


<div class="button-user">
    <a href="index.php?controller=producto&action=editar&id=<?=$product->id?>"style="background-color: green">Editar</a>
    <a href="index.php?controller=producto&action=borrar&id=<?=$product->id?>" style="background-color: red">Eliminar</a>
</div>

<?php endwhile;?> 
</div>


<div class="button-user"><a href="index.php?controller=producto&action=create">Agregar producto</a></div>
