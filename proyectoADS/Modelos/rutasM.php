<?php //  Modelos/rutasM.php
class RutasM{
    public function procesaRutasM($ruta){
        if( $ruta == "ingreso" || 
            $ruta == "nuevo_usuario" || 
            $ruta == 'tareas' ||
            $ruta == 'tareasVencidas' ||
            $ruta == 'tareasArchivadas' ||
            $ruta == 'tareasPendientes' ||
            $ruta == 'tareasprivate' || 
            $ruta == 'RegistroSocio' ||
            $ruta == 'RegistrarVehiculo' ||
            $ruta == 'RegistroChoferes' || 
            $ruta == 'RegistrarPagos' || 
            $ruta == 'RegistrarPasaje' ||
            $ruta == 'RegistrarObjetosPerdidos' || 
            $ruta == 'ReporteVehiculo' || 
            $ruta == 'ReportePagos' || 
            $ruta == 'ReporteCronograma' || 
            $ruta == 'ReporteChoferes' || 
            $ruta == 'ReporteSocios' || 
            $ruta == 'ReporteAdmin' || 
            $ruta == 'dashboard' ||
            $ruta == 'salir' ||
            $ruta == 'perfil' ||
            $ruta == 'editarperfil' ||
            $ruta == 'borrar' ||
            $ruta == 'comentar' ||
            $ruta == 'recuperar_contraseña' ||
            $ruta == 'editar')
        {
            $pagina = "Vistas/Modulos/".$ruta. ".php";
        }
        else if($ruta == 'index'){
            $pagina = "Vistas/Modulos/ingreso.php";
        }
        else {
            $pagina = "Vistas/Modulos/ingreso.php";
        }
        return $pagina;
    }

}
?>