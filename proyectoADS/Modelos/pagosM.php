<?php  //pagos
require_once "conexionBD.php";

class pagosM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'pagos';
    }

    public function registrarpagosM($datosC){
        $cBD = $this->conectarBD();

        $monto = $datosC['monto'];
        $fecha = $datosC['fecha'];
        $socio = $datosC['socio_idsocio'];

        $query = "INSERT INTO $this->tablaBD VALUES 
            (NULL,'$monto','$fecha','$socio')";

        $result = $cBD->query($query);
        return $result;
    }
}
