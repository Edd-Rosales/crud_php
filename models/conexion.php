<?php

  $servidor='localhost';
  $usuario='root';
  $pass=170214;


  $conexion = new mysqli($servidor, $usuario, $pass, 'crud_php'); 
  $conexion->set_charset('utf8');

  




/*
    try{
      $this->conexion = new PDO("mysql:host=$this->servidor;dbname=crud_php", $this->usuario, $this->pass); //instamcia de PDO para conextarnos a la base de datos
      $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //Para el manejo de errores
    }catch(PDOException $e){
      return "Falla de conexion".$e;
    }
  */
?>