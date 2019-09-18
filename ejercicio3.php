<?php
$compra = $_GET["compra"];
if($compra<30 ) {
    echo " La compra es demasiado pequena para que el envio sea gratis";
}
elseif ($compra<100){
    echo "cubriremos el 50% de los gastos de envio";

}
elseif ($compra>100){
    echo "El envio es gratis";

}  

?>