<?php

include('baseDatos.php');

if (isset($_POST["btn-Eliminar"])){
    $nombre = $_POST["eliminarUsuario"]; 
    
         $consulta= "DELETE FROM `usuarios` WHERE Nombre='$nombre'";
  
         $operacionesEnBaseDatos = new BaseDatos();
 
         $operacionesEnBaseDatos-> alterarBaseDatos($consulta);  


}else{
    echo("No se preciono el botón");
}





?>