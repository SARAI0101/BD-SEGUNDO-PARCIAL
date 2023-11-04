<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Inicio se sesion</title>
</head>
<body class="d-flex justify-content-center vh-100 align-items-center">
    <form action="lib/login.php" method="POST">
        <div>
            <label for="" class="form-label">Correo Electronico</label>
            <input type="email" name= "email" id="email" class="form-control">
        </div>
        <div class="my-2">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control"> 
        </div>
        <div>
            <input type="submit" value="Iniciar sesión" class="btn btn-primary">
        </div>
</body>
</html>