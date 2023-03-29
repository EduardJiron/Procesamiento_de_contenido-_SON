<?php
include 'conexion.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $idC = $_POST ["idC"];
    $nombres = $_POST ["nombres"];
    $apellidos = $_POST["apellidos"];
    $fechaNac = $_POST["fechaNac"];
    $titulo = $_POST ["titulo"];
    $email = $_POST["email"];
    $facultad = $_POST["facultad"];

    $sql= "UPDATE coordinador SET nombres = '$nombres', apellidos = '$apellidos', fechaNac = '$fechaNac', titulo = '$titulo', email = '$email', facultad. = '$facultad' WHERE idC = '$idC' " ;
    $result = $sqli -> query($sql);

    if($result == true){

        echo "Registro editado exitosamente...";
    }else{

        echo "Error al editar el registro";
    }

}
?>