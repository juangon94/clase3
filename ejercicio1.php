<?php
$edad = $_GET["edad"];
$nombre =$_GET["nombre"];
$apellido =$_GET["apellido"];
if($edad>=18){
    echo "$nombre $apellido es mayor de edad";
} else {
    echo "$nombre $apellido no es mayor de edad";
}
  


?>