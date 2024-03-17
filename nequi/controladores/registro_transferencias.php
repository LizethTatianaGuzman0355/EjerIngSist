<?php

require "../config/conexion.php";

$celular = $_POST["celular"];
$valor = $_POST["valor"];
$descripcion = $_POST["descripcion"];


$sql_insert = "INSERT INTO transferencia (celular,valor, descripcion,fecha_sys)
VALUES ('".$celular."' , '".$valor."' , '".$descripcion."' , NOW())";
echo $sql_insert;
if($dbh->query($sql_insert)) {
    echo "info registrada correctamente";
}else {
    echo "error guardado";
}
?>