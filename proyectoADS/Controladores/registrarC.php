<?php  // registrar usuarios
class registrarC {
    function __construct(){
        $this->registrarM = new registrarM();
    }

    public function registrarUsuarioC(){
        if(isset($_POST['nombreRU'])){
            if($_POST["passwordRU"] === $_POST["ConfipasswordRU"]){

                $datosC =array();
                $datosC['nombre'] = $_POST['nombreRU'];
                $datosC['apellido'] = $_POST['apellidoRU'];
                $datosC['usuario'] = $_POST['usernameRU'];
                $datosC['contraseña'] = $_POST['passwordRU'];
                $datosC['email'] = $_POST['emailRU'];
                $datosC['perfil'] = $_POST['perfilRU'];

    
                $resultado = $this->registrarM->registrarUsuariosM($datosC);
             
                header('location: index.php?ruta=RegistroSocio');


            }
            else{
            return false;
                }
        }
        return true;
    }

    //mostrar empleados
    public function mostrarUsuarioC(){
        $resultado = $this->registrarM->mostrarUsuarioM();
        return $resultado;
    }

    public function mostrarUsuario1C(){
        $resultado = $this->registrarM->mostrarUsuario1M();
        return $resultado;
    }
    public function mostrarUsuario2C(){
        $resultado = $this->registrarM->mostrarUsuario2M();
        return $resultado;
    }



/*
    //editar empleados
    public function editarTareasC(){
        if(isset($_GET['usuarios_idusuarios'])){
            $datosC = array('usuarios_idusuarios'=>$_GET['usuarios_idusuarios']);
            $resultado = $this->TareasM->editarTareasM($datosC);
            $rows = $resultado->fetch_array(MYSQLI_ASSOC);
            return $rows;
        }
    }

    //actualizar empleados
    public function actualizarTareasC(){
        if(isset($_POST['nombreE'])){
            $datosC = array(    'usuarios_idusuarios'=>$_POST['idusuarios_idusuariosE'],
                                'titulo'=>$_POST['tituloE'],
                                'contenido'=>$_POST['contenidoE'],
                                'fecha_registro' => $_POST['fecha_registroE'],
                                'fecha_vencimiento' => $_POST['fecha_vencimientoE'],
                                'prioridad' => $_POST['prioridadE'],
                            );
            $resultado = $this->TareasM->actualizarTareasM($datosC);
            header("location: index.php?ruta=tareas");
        }
    }

    //borrar empleado
    public function borrarTareasC(){
        if(isset($_GET['id'])){
            $datosC = array('id' => $_GET['id']);
            $this->TareasM->borrarTareasM($datosC);
            header('location: index.php?ruta=tareas');
        }
    }
}
*/
}
?>