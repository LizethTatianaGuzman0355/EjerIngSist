<?php

require "../config/conexion.php";

$celular = $_POST["celular"];
$valor = $_POST["valor"];


$sql_insert = "INSERT INTO saldo (celular,valor,fecha_sys)
VALUES ('".$celular."' , '".$valor."' , NOW())";
echo $sql_insert;
if($dbh->query($sql_insert)) {
    echo "info registrada correctamente";
}else {
    echo "error guardado";
}
?>