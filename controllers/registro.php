<?php
  if(!empty($_POST['btnRegistrar'])){
    if(!empty($_POST['nombre']) and ($_POST['apellido']) and ($_POST['dni']) and ($_POST['fecha']) and ($_POST['mail'])){
      //echo 'Todo Ok';
      $nombre=$_POST['nombre'];
      $apellido=$_POST['apellido'];
      $dni=$_POST['dni'];
      $fecha=$_POST['fecha'];
      $mail=$_POST['mail'];

      $sql=$conexion->query("INSERT INTO usuarios(nombre, apellido, dni, nacimiento, email)VALUES
      ('$nombre','$apellido','$dni','$fecha','$mail');");

      if($sql==1){
        echo '<div class="alert alert-success ">Registro Exitoso</div>';
      }else{
        echo '<div class="alert alert-danger ">No se pudo registrar</div>';
      }


    }else{
      echo '<div class="alert alert-warning ">Alguno de los campos esta vacio</div>';
    }
  }

?>