<?php 
require_once '../lib/conexion.php';
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Detalle</title>
</head>
<body class="d-flex justify-content-center vh-100 align-items-center">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <?php 
    $query ="SELECT * FROM usuarios WHERE id= $id";
    $result= mysqli_query($conex, $query);
    $row= mysqli_fetch_assoc ($result);
    
    ?>
    <h5 class="card-title"><?php echo $row['name'];?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $row['email'];?></h6>
    <p class="card-text"><?php echo $row['phone'];?></p>
    <p class="card-text"><?php echo $row['addres'] . ", " . $row['city'] . ", " . $row['state']; ?></p>
    <a href="index.php" class="card-link">Regresar</a>
  </div>
</div>
</body>
</html>