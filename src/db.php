<?php
  $conexion = new mysqli(
    hostname:"mysql-server", 
    username:"root", 
    password:"rootpassword", 
    database:"midb"
  );
  if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
  }
?>