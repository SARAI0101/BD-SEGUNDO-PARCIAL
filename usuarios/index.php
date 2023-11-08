<?php
require_once '../lib/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Usuarios</title>
</head>
<body>
<div class="container my-5">
    <div class="row">
        <div class="col">
            <h1>Usuarios <a href="insertar.php" class="btn btn-primary">Añadir</a></h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query="SELECT * FROM usuarios";
        $result = mysqli_query($conex, $query);
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['addres'] . ", " . $row['city'] . ", " . $row['state']; ?></td>
            <td style="white-space: nowrap;">
            <a href="detalle.php?id=<?php echo $row['id']?>" class="btn btn-success">Detalles</a>
                <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-warning">Editar</a>
                <a href="actions/eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
        </div>
    </div>
</div>
</body>
</html>