<?php require_once 'contactoModel.php';

$modelo = new ContactoModel();

$datosFormulario = array(
    'name' => $_POST['name'],
    'telefono' => $_POST['telefono'],
    'email' => $_POST['email'],
    'message' => $_POST['message']
);

$resultado = $modelo->procesarFormulario($datosFormulario);

if ($resultado) {
    ?>
    <script>
        alert("¡Formulario ingresado con éxito!");
        window.location.href = "index.php";
    </script>
    <?php
    //echo "¡Formulario ingresado con exito!";
} else {
    ?>
    <script>
        alert("Ha ocurrido un error al ingresar los datos, por favor inténtalo de nuevo.");
        window.location.href = "index.php";
    </script>
    <?php
    //echo "A ocurrido un error al ingresar los datos, porfavor intetalo de nuevo.";
}

?>
