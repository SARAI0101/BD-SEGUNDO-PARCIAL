<?php
include '../lib/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Editar</title>
</head>
<body>
<?php

if(isset($_POST['enviar'])){
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $correo= $_POST["correo"];
    $password= $_POST["password"];
    $telefono= $_POST["telefono"];
    $direccion= $_POST["direccion"];
    $ciudad= $_POST["ciudad"];
    $estado= $_POST["estado"];


    $query="UPDATE usuarios SET name = '$nombre', email = '$correo', password = '$password', phone = '$telefono', 
    addres = '$direccion', city = '$ciudad', state = '$estado' WHERE id = '$id'";
    $results = mysqli_query ($conex, $query);
    
    if($results){
        echo "<script language = 'javascript'>
        alert('Los datos se actualizaron correctamente');
        location.assign('index.php'); </script> ";

    }else{
            echo "<script language = 'javascript'>
            alert('Los datos NO se actualizaron'); 
            location.assign('index.php'); </script> ";
        }
        mysqli_close ($conex);
}else{
    $id = $_GET['id'];
    $query = "SELECT * FROM usuarios WHERE id = '$id'";
    $result= mysqli_query($conex, $query);
    $row= mysqli_fetch_assoc ($result);

    $nombre= $row["name"];
    $correo= $row["email"];
    $password= $row["password"];
    $telefono= $row["phone"];
    $direccion= $row["addres"];
    $ciudad= $row["city"];
    $estado= $row["state"];

    mysqli_close($conex);
?>
<form action="<?=$_SERVER['PHP_SELF']?>" method = "POST">
    <div class="container my-5">
        <div class="row">
            <div class="col-8 offset-2">
                    <div class="form-group">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name= "nombre" id="nombre" class="form-control" value="<?php echo $nombre; ?>">
                    </div>
                    <div class="form-group">
                        <label for="correo" class="form-label">Correo Electronico</label>
                        <input type="email" name= "correo" id="correo" class="form-control" value="<?php echo $correo; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control"  value="<?php echo $password; ?>"> 
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" name="telefono" id="telefono" class="form-control"  value="<?php echo $telefono; ?>"> 
                    </div>
                    <div class="form-group">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" name="direccion" id="direccion" class="form-control"  value="<?php echo $direccion; ?>"> 
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Ciudad</label>
                        <input type="text" name="ciudad" id="ciudad" class="form-control"  value="<?php echo $ciudad; ?>"> 
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Estado</label>
                        <input type="text" name="estado" id="estado" class="form-control"  value="<?php echo $estado; ?>"> 
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="my-3">
                        <input type="submit" name="enviar" class="btn btn-success">
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
                <?php
                }
                ?>
                </div>
            </div>
        </div>
</body>
</html>