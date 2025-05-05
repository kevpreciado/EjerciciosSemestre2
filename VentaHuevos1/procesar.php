<?php
require 'config/conexi.php';
$cantidad= $_POST["cantidad"];
$tipo = $_POST["tipo"];


if($tipo==1)
{
    $valor=600;
    
}

if($tipo==2)
{
    $valor=900;
      
}

if($tipo==3)
{
    $valor=1200;
      
}
$total = $valor * $cantidad;
$sql = "INSERT INTO ventahuevos (valor, cantidad, tipo, total, fecha) VALUES (".$valor.", ".$cantidad.", ".$tipo.", ".$total.",NOW())";



if($dbh->query($sql))
{

echo "Venta registrada $".$total;
}else 
 {

echo "Error en la venta";
 }
