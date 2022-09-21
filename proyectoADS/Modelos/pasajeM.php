<?php  //pagos
require_once "conexionBD.php";

class pasajeM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'pasaje';
    }

    public function registrarpasajeM($datosC){
        $cBD = $this->conectarBD();

        $precio1 = $datosC['precioRuta1'];
        $precio2 = $datosC['precioRuta2'];
        $admi = $datosC['administrador_idadministrador'];

        $query = "INSERT INTO $this->tablaBD VALUES 
            (NULL,'$precio1','$precio2','$admi')";

        $result = $cBD->query($query);
        return $result;
    }
}
