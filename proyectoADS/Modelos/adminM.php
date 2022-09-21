<?php  //Modelos/adminM.php
    require_once "conexionBD.php";
    
    class AdminM extends ConexionBD{
        public function IngresoM($datosC){
            $cBD = $this->conectarBD();

            $tablaBD = "administrador";
            $usuario = $datosC['usuario'];
            $clave = $datosC['contraseña'];
            $perfil = $datosC['perfil'];
            $un_temp = mysql_entities_fix_string($cBD, $usuario);
            $pw_temp = mysql_entities_fix_string($cBD, $clave);
            $pw_perfil = mysql_entities_fix_string($cBD, $perfil);


            $query = "SELECT * FROM $tablaBD 
                WHERE usuario='$un_temp' AND perfil='$pw_perfil'";
            $result = $cBD->query($query);

            if ($result->num_rows)
            {
                $row = $result->fetch_array(MYSQLI_NUM);
                $result->close();
      
                if (password_verify($pw_temp, $row[4])) 
                {   
                    $query = "SELECT * FROM $tablaBD 
                    WHERE usuario='$un_temp' AND idadministrador ='$row[0]'";
                    $result = $cBD->query($query);
                    return $row[0];
                }

            }


        } 
    }
    function mysql_entities_fix_string($cBD, $string)
    {
        return htmlentities(mysql_fix_string($cBD, $string));
    }
    function mysql_fix_string($cBD, $string)
    {
      //if (get_magic_quotes_gpc()) $string = stripslashes($string);
      return $cBD->real_escape_string($string);
    }  
    
?>