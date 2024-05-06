<?php
     include(".php"); //aun no creado

     if (isset($_POST['usuario']) && isset($_POST['clave'])){

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $usuario = validate($_POST['usuario']);
        $clave = validate($_POST['clave']);

        if (empty($usuario)){
            header("location: login.php?error-El Usuario es requerido");
            exit();

        }elseif (empty($clave)) {
            header("location: login.php?error-La Clave es requerida");
            exit();
        }
     }
