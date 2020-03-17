<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuarios</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div>
        <h1>
            CREAR USUARIO<br>
        </h1>
        <h2>
            <a href="index.php">LISTADO DE USUARIO</a>
        </h2>
    </div>

    <div>
    <form action="guardar.php" method="post">
        <table border=2 bgcolor="green">
            <thead>
            <tr>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
            </tr>
            </thead>

            <tbody class="center">
            <tr>
                <td><input type="text" name="nombre" size="40"></td>
                <td><input type="text" name="apellido" size="40"></td>
                <td><input type="text" name="email" size="40"></td>
                <td><input type="password" name="password" size="40"></td>
            </tr>
            <tr>
                <td colspan="4"><br><button type="submit">GUARDAR</button></td>
            </tr>
            </tbody>
        </table>
    </form>
    </div>
</div>

</body>
</html>