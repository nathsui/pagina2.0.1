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
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="style.css">
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <title>ElFaro</title>
    </head>
    <header>
        
<script> <!--Nuevos articulos-->

    var contador = 0;
    function enviarNoticia() {
    var datos = new FormData();
   
    var titleInput = document.querySelector('input[name="titleInput"]').value;
    var descriptionInput = document.querySelector('textarea[name="descriptionInput"]').value;

    datos.append("titleInput", titleInput);
    datos.append("descriptionInput", descriptionInput);
    
    var contenido = document.getElementById("nuevo-articulo");
    contenido.innerHTML = "<h2><strong></strong>" + titleInput + "</h2>";
    contenido.innerHTML += "<p><strong></strong>" + descriptionInput + "</p>";
    
    contador++;
    document.getElementById("articleCounter").textContent = contador + "Articulos";
    }   

    function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
    results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    window.onload = function() {
    enviarNoticia();
    };
</script>

    <nav class="navbar navbar-expand-lg navbar-light fidex-top" style="background-color: #e4f4f4;"> <!--Navbar-->
        <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/minifaro.png" alt width="30" height="24"
                        class="d-inline-block align-text-top">ElFaro</a>

                <div class="reloj"> <!--Reloj-->
                    <p class="fecha"></p>
                    <p class="tiempo"></p>
                </div>
                <script src="reloj.js"></script>

                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" 
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="noticias.php">Noticias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="entretenimiento.php">Entretenimiento</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#"
                                id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Novedades
                            </a>
                            <ul class="dropdown-menu"
                                aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="login.php">Login</a></li>
                                <li><a class="dropdown-item" href="registro.php">Registrate</a></li>
                                <li><a class="dropdown-item"
                                        href="publicidad.php">Nuevos Articulos</a></li>
                                <li><a class="dropdown-item" href="formulario.php">Contacto</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</header>