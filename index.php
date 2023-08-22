<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/estilos.css">
  <title>CRUD - PHP</title>
</head>
<body>
  <h1 class="text-center text-secondary">Registro De Usuarios</h1>
  <div class="container-fluid row bg-secondary">
    <form class="col-4 p-3 bg-dark" method="POST" >
      <h3 class="text-center text-secondary">Registro De Personas</h3>
      <?php 
      include 'models/conexion.php';
      include 'controllers/registro.php';
      include 'controllers/eliminar.php';
      ?>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label" >Nombre</label>
        <input type="text" class="form-control bg-secondary" name="nombre" placeholder = "Ingresa Nombre">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label" >Apellido</label>
        <input type="text" class="form-control bg-secondary" name="apellido" placeholder = "Ingresa Apelido">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label" >DNI</label>
        <input type="text" class="form-control bg-secondary" name="dni" placeholder = "Ingresa DNI">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label" >Fecha de Nacimiento</label>
        <input type="date" class="form-control bg-secondary" name="fecha" placeholder = "Ingresa Fecha De Nacimiento">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label" >e-mail</label>
        <input type="e-mail" class="form-control bg-secondary" name="mail" placeholder = "Ingresa e-mail">
      </div>
    
    <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">Registrar</button>
  </form>

  <div class="col-8 p-4 bg-dark">
    <table class="table text-center table table-dark table-striped">
  
    <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">DNI</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">E-mail</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
     include 'models/conexion.php';
     //include 'controllers/registro.php';
     //include 'controllers/eliminar.php';
     $sql=$conexion->query("select * from usuarios");
     while($datos=$sql->fetch_object()){?>
        <tr>
      <th scope="row"><?php echo $datos->id;?></th>
      <td><?php echo $datos->nombre;?></td>
      <td><?php echo $datos->apellido;?></td>
      <td><?php echo $datos->dni;?></td>
      <td><?php echo $datos->nacimiento;?></td>
      <td><?php echo $datos->email;?></td>
      <td>
        <a href="editar.php?id=<?= $datos->id ?>" class="btn btn-small btn-primary"><i class="bi bi-pencil-square"></i></a>
        <a href="index.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="bi bi-trash"></i></a>
      </td>
    </tr>
    <?php
     }
    ?>
    
  </tbody>

    </table>
  </div>


  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>