<?php

$id = $_GET ['id'];

require_once '../../lib/conexion.php';
$query = "DELETE FROM usuarios WHERE id = $id";
mysqli_query($conex, $query);

header ("Location: ../");
?>