<?php  //Modelos/empleadosM.php
require_once "conexionBD.php";

class perfilM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'usuarios';
    }

   public function registrarTareasM($datosC){
        $cBD = $this->conectarBD();
        $titul = $datosC['titulo'];
        $conteni = $datosC['contenido'];
        $registro = $datosC['fecha_registro'];
        $vencimiento = $datosC['fecha_vencimiento'];
        $priori = $datosC['prioridad'];
        $query = "INSERT INTO $this->tablaBD VALUES 
            (Null,'$titul', '$conteni', '$registro', '$vencimiento', '$priori')";

        $result = $cBD->query($query);

        return $result;
    }
    // mostrar perfil de usuario
    public function mostrarPerfilM(){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];
        $query = "SELECT *
                FROM $this->tablaBD where id_usuario =$iduser ";
        $result = $cBD->query($query);
        return $result;
    }
    // mostrar nombre para tablon
    public function mostrarNombreM(){
        $cBD = $this->conectarBD();
        $query = "SELECT *
                FROM $this->tablaBD where id_usuario =$iduser ";
        $result = $cBD->query($query);
        return $result;
    }

    public function editarPerfilM($datosC){
        $cBD = $this->conectarBD();
        $id = $datosC['id_usuario'];
        $query = "SELECT *
                FROM $this->tablaBD WHERE id_usuario='$id'";
        $result = $cBD->query($query);
        return $result;
    }
// actualizar perfil
    public function actualizarPerfilM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];
        $nom = $datosC['nombre'];
        $apell = $datosC['apellido'];
        $userna = $datosC['username'];
        $emai = $datosC['email'];
        $universid = $datosC['universidad'];
        $nacimien = $datosC['fecha_nacimiento'];
        $lugar = $datosC['lugar_vivir'];
        $procedenci = $datosC['procedencia'];
        $estad = $datosC['estado_S'];
        
        $query = "UPDATE $this->tablaBD
            SET 
            nombre='$nom', 
            apellido='$apell',
            username='$userna', 
            email='$emai',
            universidad='$universid',
            fecha_nacimiento='$nacimien',
            lugar_vivir='$lugar',
            procedencia='$procedenci',
            estado_S='$estad'
            WHERE id_usuario='$iduser'";
        echo $query;
        $resultado = $cBD->query($query);
        return $resultado;    
    }


    /*
    public function borrarTareasM($datosC){
        $cBD = $this->conectarBD();
        extract($datosC);
        $query = "DELETE FROM $this->tablaBD WHERE titulo='$id'";
        $resultado = $cBD->query($query);
    }
    */
} 
?>