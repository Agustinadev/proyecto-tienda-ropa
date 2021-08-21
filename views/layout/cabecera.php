<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--  -->
 <link rel="stylesheet" href="<?=url?>assets/styles/styles.css">
 <link rel="stylesheet" href="<?=url?>assets/styles/pushbar.css">
  <!-- //tipografias -->


   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Satisfy&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <header id="header">
    <nav>
     
      <div class="logo-container">
        <div class="obj-1">
          <img data-pushbar-target="pushbar" class="img-menu fas fa-bars" src="<?=url?>assets/img/menu.png" alt=""> 
           </div>
          <div class="ciruela-prugna obj-2">
            <button class="prugna">Prugna</button>
            <img id="logo" src="<?=url?>assets/img/ciruela (1).png" alt="">
          </div>
          <div class="obj-3">
            <a href="<?=url?>index.php?controller=usuario&action=profile" class="icon-usuario"><img src="<?=url?>assets/img/usuario.png" alt=""></a>
            <a href="" class="icon-carrito"><img src="<?=url?>assets/img/carrito-de-compras.png" alt=""></a>
          </div>
       </div>
      

      <div data-pushbar-id="pushbar" data-pushbar-direction="left">
      <ul id="ul">
    <li id="li"><a href="<?=url?>index.php">Inicio</a></li>

    <li id="li" class="li_container_desplegable">
      <div class="container_boton_desplegable">
      <a href="<?=url?>index.php?controller=producto&action=index" class="a_desplegable">Productos</a>
      <img src="assets/img/flecha-hacia-abajo.png" alt="" class="flecha_desplegable">
      </div>

        <ul class="ul_desplegable">
          
      
        </ul>
    </li>

    <li id="li"><a href="<?=url?>pedidos.php">Pedidos</a></li>
    <li id="li"><a href="<?=url?>index.php?controller=usuario&action=contact">Contacto</a></li>
  </ul>
  </div>
  </nav>
</header>




      