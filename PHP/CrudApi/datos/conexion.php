<?php

 $sqli=new mysqli("localhost","root","","myuca");
    if($sqli->connect_errno){
    echo "Fallo al conectar a MySQL: (" . $sqli->connect_errno . ") " . $sqli->connect_error;
    }
    else{
   
    }


?>