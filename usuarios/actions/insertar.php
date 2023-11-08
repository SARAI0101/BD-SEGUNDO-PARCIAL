<?php
extract($_POST);

if (!isset($_POST['register'])){
    header("Location: ../");
    exit();
}

require_once '../../lib/conexion.php';
$query = "INSERT INTO usuarios (name, email, password, phone, addres, city, state) VALUES 
('$nombre','$correo','$password','$telefono','$direccion','$ciudad','$estado')";

mysqli_query ($conex, $query);
header("Location: ../");
?>