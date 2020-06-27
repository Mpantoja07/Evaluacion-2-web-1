<?php

include('baseDatos.php');

if(isset($_POST["btn-Agregar"])){
    $nombre = $_POST["nombreUsuario"]; 
    $correo =  $_POST["correoUsuario"]; 
    $password = $_POST["passUsuario"];

        ///1. crear una consulta de sql para agregar datos
        $consulta= "INSERT INTO `usuarios`( Nombre, Correo, `Password`) VALUES ('$nombre', '$correo', '$password' )";
  
        ///2. crear un objeto de la clasebaseDatos
        $operacionesEnBaseDatos = new BaseDatos();

        ///3. usar metodo de la clase BaseDatos para poder escribir en la BD
        $operacionesEnBaseDatos-> alterarBaseDatos($consulta);  
}else{
    echo("No se preciono el botón");
}





?>