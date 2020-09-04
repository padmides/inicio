<?php include_once("funciones.php");
      include_once("conexion.php"); ?>
<div id="header">
  <h1></h1>
</div>
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a href="perfil.php" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Bienvenido <?php echo $_SESSION['usuario']["nombre"]; ?></span></a></li>
    <li class=""><a title="" href="salir.php"><i class="icon icon-share-alt"></i> <span class="text">Salir</span></a></li>
  </ul>
</div>
<div id="sidebar">
  <ul>
    <li class="<?php if(url('index.php')){ echo 'active';} ?>"><a href="index.php"><i class="icon icon-home"></i> <span>Administrador</span></a> </li>
    <li class="<?php if(url('usuario.php')){ echo 'active';} ?>"><a href="usuario.php"><i class="icon icon-th"></i> <span>Usuario</span></a></li>
    <li class="<?php if(url('calendario.php')){ echo 'active';} ?>"><a href="calendario.php">Calendario</a></li>
    <li class="<?php if(url('planes.php')){ echo 'active';} ?>"><a href="planes.php">Planes</a></li>
    <li class="<?php if(url('factura.php')){ echo 'active';} ?>"><a href="factura.php">Factura</a></li>
  </ul>
</div>