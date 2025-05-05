<?php
require "config/conexi.php";
$id = $_POST['id'];
$corte1 = $_POST["corte1"];
$corte2 = $_POST["corte2"];
$corte3= $_POST["corte3"];

$total = ($corte1 * 0.30) + ($corte2 * 0.30) + ($corte3 * 0.40); 

$sql= "UPDATE NotasCorte SET

    corte1 = '".$corte1."',
    corte2 = '".$corte2."',
    corte3 = '".$corte3."',
    total = '".$total."'
WHERE

id=".$id."";
if($dbh->query($sql))
{
echo "Nota Actualizada Correctamente";
}

else
{
    
echo "error actualizacion nota";

}
?>
