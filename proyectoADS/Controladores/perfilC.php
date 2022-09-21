<?php  // Controladores/empleadosC.php
class perfilC {
    function __construct(){
        $this->perfilM = new perfilM();
    }
    //mostrar perfil de usuario
    public function mostrarPerfilC(){
        $resultado = $this->perfilM->mostrarPerfilM();
        return $resultado;
    }

    //mostrar nombre en el tablon
    public function mostrarNombreC(){
        $resultado = $this->perfilM->mostrarNombreM();
        return $resultado;
    }


    //editar usuarios
    public function editarPerfilC(){
        if(isset($_GET['id_usuario'])){
            $datosC = array('id_usuario'=>$_GET['id_usuario']);
            $resultado = $this->perfilM->editarPerfilM($datosC);
            $rows = $resultado->fetch_array(MYSQLI_ASSOC);
            return $rows;
        }
    }
        //actualizar usuarios
    public function actualizarPerfilC(){
        if(isset($_POST['nombreE'])){
            $datosC = array();  
            $datosC['nombre']= $_POST['nombreE'];
            $datosC['apellido']= $_POST['apellidoE'];
            $datosC['username']= $_POST['usernameE'];
            $datosC['email']= $_POST['emailE'];
            $datosC['universidad']= $_POST['universidadE'];
            $datosC['fecha_nacimiento']= $_POST['fecha_nacimientoE'];
            $datosC['lugar_vivir']= $_POST['lugar_vivirE'];
            $datosC['procedencia']= $_POST['procedenciaE'];
            $datosC['estado_S']= $_POST['estado_SE'];
                        
            $resultado = $this->perfilM->actualizarPerfilM($datosC);
            header("location: index.php?ruta=perfil");
        }
    }
}
?>