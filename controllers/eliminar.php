<?php

if(!empty($_GET['id'])){
  $id=$_GET['id'];

  
  $sql=$conexion->query("delete from usuarios WHERE id=$id");

  if($sql == 1){
    echo '<div class="alert alert-success">Usuario Eliminado</div>';
  }else{
    echo '<div>Error al eliminar</div>';
  }
}

?>