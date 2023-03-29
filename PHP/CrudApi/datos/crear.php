<?php


include_once 'conexion.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

    $nombres=$_GET['nombres'];
    $apellidos=$_GET['apellidos'];
    $fechaNac=$_GET['fechaNac'];
    $titulo=$_GET['titulo'];
    $email=$_GET['email'];
    $facultad=$_GET['facultad'];


    $sql="INSERT INTO coordinador (`nombres`, `apellidos`, `fechaNac`, `titulo`, `email`, `facultad.`)VALUES ('$nombres','$apellidos','$fechaNac','$titulo','$email','$facultad')";
    $result= $sqli-> query($sql);
   
    if($sqli->affected_rows>0){
        echo "Registro exitoso";
    }

    else{
        echo "Error al registrar";
    }


}
?>