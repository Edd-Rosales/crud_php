<?php

include 'models/conexion.php';
$id=$_GET['id'];

$sql=$conexion->query("SELECT * FROM usuarios where id=$id");

?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title >Editar Registro</title>
</head>
<body>
<form class="col-4 p-3 m-auto " method="POST">
      <h3 class="text-center alert alert-secondary text-secondary">Editar</h3>
    
      <input type="hidden" name="id" value="<?=$_GET["id"]?>">
      
      <?php
        include 'controllers/modificar.php';
        while($datos=$sql->fetch_object()){?>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label" >Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder = "" value="<?= $datos->nombre ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label" >Apellido</label>
        <input type="text" class="form-control" name="apellido" placeholder = "" value="<?= $datos->apellido ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label" >DNI</label>
        <input type="text" class="form-control" name="dni" placeholder = "" value="<?= $datos->dni ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label" >Fecha de Nacimiento</label>
        <input type="date" class="form-control" name="fecha" placeholder = "" value="<?= $datos->nacimiento ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label" >e-mail</label>
        <input type="e-mail" class="form-control" name="mail" placeholder = "" value="<?= $datos->email ?>">
      </div>

      <?php  }
      ?>


      
    
    <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">Modificar Usuario</button>
  </form>
  
</body>
</html>