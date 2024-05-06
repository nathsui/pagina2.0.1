<?php

class ContactoModel {
    
    public function procesarFormulario($datos) {
    
        if (isset($datos['name']) && isset($datos['email']) && isset($datos['message'])) {
//isset sirve para asegurar los campos requeridos esten en el array $datos
            $nombre = $datos['name'];
            $email = $datos['email'];
            $mensaje = $datos['message'];

            return true;
        } else {
            return false;
        }
    }
}

?>

