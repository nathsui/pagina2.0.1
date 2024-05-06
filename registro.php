<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>registro</title>
</head>
<body>
    <form method="post" autocomplete="off">
        <h2>Registrate</h2>
        <div class="input-group">

            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre">
         
            </div>

            <div class="input-container">
                <input type="password" name="password" placeholder="Contraseña">
             
            </div>

            <div class="input-container">
                <input type="email" name="email" placeholder="Correo">
          
            </div>

            <div class="input-container">
                <input type="tel" name="phone" placeholder="Telefono">
          
            </div>

            <div class="input-container">
                <input type="submit" name="send" class="btn" value="enviar">
               
            </div>
        </div>   
    </form>

    <?php include("send.php");
    ?>

</body>
</html>