
  <div class="button-user">
    <?php if (isset($_SESSION['identity'])) : ?>
    <?php if(isset($_SESSION['admin'])) : ?>
      <a href="index.php?controller=producto&action=manejador">Gestionar producto</a>
      <a href="index.php?controller=categoria&action=index">Gestionar categoria</a>
      <?php endif?>
      <a href="">Editar perfil</a>
      <a href="index.php?controller=usuario&action=logout">Cerrar sesión</a>
    <?php endif?>
  </div>
