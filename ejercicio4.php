<?php
$temperatura = $_GET["temperatura"];
switch ($temperatura){
    case 30:
        echo "hace calor";
    break;
    case 15:
        echo "hace frio";
    break;
    case 50:
        echo "hace demasiado calor";
    break;
    default: 
        echo "La temperatura ingresada no puede ser procesada";
}
?>