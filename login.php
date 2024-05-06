<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="login.css">
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>login</title>
</head>
<body>

<form action="inicio.php" method="POST">
    <h1>Iniciar Sesion</h1>
    <hr>
    <i class="bi bi-person"></i>
    <label>Usuario</label>
    <input type="text" name="usuario" placeholder="Usuario">

    <i class="bi bi-unlock"></i>
    <label>Clave</label>
    <input type="text" name="clave" placeholder="Clave">
    <hr>
    <button type="submit">Iniciar Sesion</button>
    <a href="registro.php">Crear Cuenta</a>
    

</form>
    
</body>
</html>