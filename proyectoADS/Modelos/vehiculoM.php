<?php  //vehiculos
require_once "conexionBD.php";

class vehiculoM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'vehiculos';
    }

    public function registrarVehiculoM($datosC){
        $cBD = $this->conectarBD();

        $placa = $datosC['placa'];
        $color = $datosC['color'];
        $marca = $datosC['marca'];
        $modelo = $datosC['modelo'];
        $tipo_vehiculo = $datosC['tipo_vehiculo'];
        $socio = $datosC['socio_idsocio'];
        $query = "INSERT INTO $this->tablaBD VALUES 
            (NULL,'$placa','$color','$marca','$modelo','$tipo_vehiculo','$socio')";

        $result = $cBD->query($query);
        return $result;
    }
}
