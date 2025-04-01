<?php
require 'config/conex.php';
$tipo = $_POST["tipo"];
$cantidad = $_POST["cantidad"];
$tipo1 = 12000;
$tipo2 = 8500;
$tipo3 = 7500;
$total = 0; 

if ($tipo == 1 && $cantidad > 0)
{
    $total = $cantidad * $tipo1;
    $sql = "INSERT INTO venta(tipo, cantidad, total) VALUES (".$tipo.",".$cantidad.",".$total.")";
    if ($dbh -> query($sql)) 
    {
        echo "Gracias por su compra el total va a ser de:".$total;
    }
}

else 
{
    if ($tipo == 2 && $cantidad > 0)
    {
        $total = $cantidad * $tipo2;
        $sql = "INSERT INTO venta(tipo, cantidad, total) VALUES (".$tipo.",".$cantidad.",".$total.")";
        if ($dbh -> query($sql)) 
        {
            echo "Gracias por su compra el total va a ser de:".$total;
        }
    }

    else 
    {
        if ($tipo == 3 && $cantidad > 0)
        {
            $total = $cantidad * $tipo3;
            $sql = "INSERT INTO venta(tipo, cantidad, total) VALUES (".$tipo.",".$cantidad.",".$total.")";
            if ($dbh -> query($sql)) 
            {
                echo "Gracias por su compra el total va a ser de:".$total;
            }
        }
    }
}

?>