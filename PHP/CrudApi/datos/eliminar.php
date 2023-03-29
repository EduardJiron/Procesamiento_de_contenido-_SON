<?php

include 'conexion.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $idC = $_POST ["idC"];
    $my_query = "DELETE FROM coordinador WHERE idC = $idC  ";
    $result = $sqli -> query($my_query);


    if($result == true){

        echo "Registro eliminado exitosamente...";

    }else{
            
            echo "Error al eliminar el registro";
        }


}
 
?>