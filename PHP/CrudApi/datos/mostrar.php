<?php

require_once 'conexion.php';

if($_SERVER['REQUEST_METHOD']=='GET'){


        
    $my_query="SELECT * FROM coordinador ";

    $result = $sqli->query($my_query);

    if($sqli->affected_rows>0){
        $json="{ \"Datos\": [";
        while($row=$result->fetch_assoc()){
            $json=$json. json_encode($row);
            $json=$json.",";
        }
        $json=substr(trim($json),0,-1);
        $json.="]}";



    }
    echo $json;
}

?>