<?php

$id = $_GET ['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de eliminar</title>
</head>
<body>
    <h3>¿Deseas eliminar el registro?</h3>
    <a href="confirmar_eliminacion.php?id=<?php echo $id; ?>">Si, confirmar</a>
    <a href="../">No, regresar</a>
</body>
</html>
