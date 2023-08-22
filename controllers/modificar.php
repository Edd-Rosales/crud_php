<?php
if(!empty($_POST['btnRegistrar'])){
  if(!empty($_POST['nombre']) && ($_POST['apellido']) && ($_POST['dni']) && ($_POST['fecha']) && ($_POST['mail']) ){
      
      $id = $_POST['id'];
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $dni = $_POST['dni'];
      $fecha = $_POST['fecha'];
      $email = $_POST['mail'];

      $sql=$conexion->query("update usuarios set nombre='$nombre', apellido='$apellido',dni=$dni,nacimiento='$fecha', email='$email' WHERE id=$id");

      if($sql==1){
        header('location:index.php');
        //echo '<div class="alert alert-success">Usuario Modificado con exito</div>';
      }else{
        echo '<div class="alert alert-danger">Error al modificar</div>';
      }

  }else{
    echo '<div class="alert alert-warning">Campos Vacios</div>';
  }
}
?>