<?php
require_once '../lib/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Formulario</title>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-8 offset-2">
                <form action="actions/insertar.php" method="POST">
                    <div class="form-group">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name= "nombre" id="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="correo" class="form-label">Correo Electronico</label>
                        <input type="email" name= "correo" id="correo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" name="telefono" id="telefono" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" name="direccion" id="direccion" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Ciudad</label>
                        <input type="text" name="ciudad" id="ciudad" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Estado</label>
                        <input type="text" name="estado" id="estado" class="form-control"> 
                    </div>
                    <div class="my-3">
                        <input type="submit" name="register" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>