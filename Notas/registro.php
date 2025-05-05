<?php

require "config/conexi.php";

$nombre = $_POST["nombre"];
$corte1 = $_POST["corte1"];
$corte2 = $_POST["corte2"];
$corte3 = $_POST["corte3"];

$total = ($corte1 * 0.30) + ($corte2 * 0.30) + ($corte3 * 0.40); 


$sql = "INSERT INTO NotasCorte (nombre, corte1, corte2, corte3, total, fecha) VALUES ('$nombre', $corte1, $corte2, $corte3, $total, NOW())";

if($dbh->query($sql))
{
echo "Nota Registrada Correctamente";
}

else
{
    
echo "error actualizacion";

}

?>