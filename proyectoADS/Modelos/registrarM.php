<?php  //Modelos/registrarM.php
require_once "conexionBD.php";

class registrarM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'socio';
        $this->tablaBD1= 'administrador';
        $this->tablaBD2= 'chofer';
    }

    public function registrarUsuariosM($datosC){
        $cBD = $this->conectarBD();
        $nombr = $datosC['nombre'];
        $apellid = $datosC['apellido'];
        $usernam = $datosC['usuario'];
        $pw_tem = $datosC['contraseña'];
        $emai = $datosC['email'];
        $perfi = $datosC['perfil'];

 

        $nombre = mysql_entities_fix_string($cBD,$nombr);
        $apellido = mysql_entities_fix_string($cBD,$apellid);
        $username = mysql_entities_fix_string($cBD,$usernam);
        $pw_temp = mysql_entities_fix_string($cBD,$pw_tem);

        $email = mysql_entities_fix_string($cBD,$emai);
        $perfil = mysql_entities_fix_string($cBD,$perfi);
 



        $password = password_hash($pw_temp, PASSWORD_DEFAULT);

        $query = "INSERT INTO $this->tablaBD VALUES 
            (NULL,'$nombre','$apellido','$username','$password',null,null,null,null,null,null,1,'$perfil')";

        $result = $cBD->query($query);
        return $result;
    }

    public function mostrarUsuarioM(){
        $cBD = $this->conectarBD();
        $query = "SELECT *
                FROM $this->tablaBD ";
        $result = $cBD->query($query);
        return $result;
    }


    public function mostrarUsuario1M(){
        $cBD = $this->conectarBD();
        $query = "SELECT *
                FROM $this->tablaBD1 ";
        $result = $cBD->query($query);
        return $result;
    }
    public function mostrarUsuario2M(){
        $cBD = $this->conectarBD();
        $query = "SELECT *
                FROM $this->tablaBD2 ";
        $result = $cBD->query($query);
        return $result;
    }




/*
    public function editarTareasM($datosC){
        $cBD = $this->conectarBD();
        $id = $datosC['usuarios_idusuarios'];
        $query = "SELECT titulo,contenido,fecha_registro,fecha_vencimiento,prioridad
                FROM $this->tablaBD WHERE usuarios_idusuarios='$id'";
        $result = $cBD->query($query);
        return $result;
    }

    public function actualizarTareasM($datosC){
        $cBD = $this->conectarBD();
        extract($datosC);
        $query = "UPDATE $this->tablaBD
            SET  
            titulo='$titul', 
            contenido='$conteni', 
            fecha_registro='$registro', 
            fecha_vencimiento='$vencimeinto', 
            prioridad='$priori'
            WHERE usuarios_idusuarios='$id'";
        echo $query;
        $resultado = $cBD->query($query);
        return $resultado;    
    }

    public function borrarTareasM($datosC){
        $cBD = $this->conectarBD();
        extract($datosC);
        $query = "DELETE FROM $this->tablaBD WHERE titulo='$id'";
        $resultado = $cBD->query($query);
    }
} */
}
?>