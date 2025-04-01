<?php
require 'config/conex.php';
$tipo = $_POST["tipo"];
$cantidad = $_POST["cantidad"];
$total = $cantidad * 1500;

$sql = "INSERT INTO venta(tipo, total) VALUES (".$tipo.",".$total.")";
if($dbh -> query($sql) && $cantidad > 0) 
{
    echo "Felicidades la compra se ha resgistrado exitosamente por un valor de: ".$total;
}
else {
    echo "Lo sentimos obtuvimos un error por favor vuelve a intentarlo";
}
?>