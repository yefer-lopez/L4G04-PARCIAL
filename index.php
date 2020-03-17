<?php 
    include('includes/db.php');

    $sql = "select * from usuarios";
    
    $result = DB::query($sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div>
        <h1>
            LISTADO DE USUARIO<br>
        </h1>
        <h2>
            <a href="crear.php">NUEVO USUARIO</a>
        </h2>
    </div>

    <div>
        <table border=2 bgcolor="yellow">
            <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>EMAIL</th>
                <th>ESTADO</th>
                <th>ACCIONES</th>
            </tr>
            </thead>

            <tbody class="center">
            <?php while($imprimir=mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?= $imprimir['id'] ?></td>
                <td><?= $imprimir['nombres'] ?></td>
                <td><?= $imprimir['apellidos'] ?></td>
                <td><?= $imprimir['email'] ?></td>
                <td class="<?= $imprimir['estado'] ?>"><?= $imprimir['estado'] ?></td>
                <input type="hidden" name="estado" value="<?= $imprimir['estado']?>">
                <td>
                    <?php  if($imprimir['estado'] == "activo"){  ?>
                        <a href="guardar.php?estado=<?= $imprimir['estado']?>&id=<?= $imprimir['id']?>">Inactivar</a>
                    <?php  }else{  ?>
                        <a href="guardar.php?estado=<?= $imprimir['estado']?>&id=<?= $imprimir['id']?>">Activar</a>
                    <?php  }  ?>
                    <a href="editar.php?id=<?= $imprimir['id']?>">Editar</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>