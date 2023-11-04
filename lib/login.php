<?php

require_once "conexion.php";

$correo = $_POST ["email"];
$password = $_POST ["password"];

if(!isset ($correo) || empty($correo)){
    echo "Debes rellenar el campo correo";
}

if(!isset ($password) || empty($password)){
    echo "Debes rellenar el campo contraseña";
}

$consulta = "SELECT * FROM usuarios WHERE email = '$correo' AND password = '$password'";
$resultado = mysqli_query ($conex,$consulta);
$registros = mysqli_num_rows ($resultado);

if ($registros > 0) {
    $row = mysqli_fetch_assoc($resultado);
    $genero = $row["genero"];
    $estado = $row["state"];
    $ciudad = $row["city"];

    if ($genero === "M") {
        echo "Bienvenido " . $correo . " Vives en " . $ciudad . ", " . $estado;
    } elseif ($genero === "F") {
        echo "Bienvenida " . $correo . " Vives en " . $ciudad . ", " . $estado;
    }
    
} else {
    echo "Usuario incorrecto";
}

?>