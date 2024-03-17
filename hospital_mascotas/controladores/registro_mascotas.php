<?php

require "../config/conexion.php";

$nombre = $_POST["nombre"];
$sexo = $_POST["sexo"];
$tipo = $_POST["tipo"];
$celular = $_POST["celular"];
$motivos = $_POST["motivos"];

$sql_insert = "INSERT INTO mascotas (nombre, sexo, tipo, celular, motivos,fecha_sys)
VALUES ('".$nombre."' ,'".$sexo."' ,'".$tipo."' ,'".$celular."' , '".$motivos."' , NOW())";
echo $sql_insert;
if($dbh->query($sql_insert)) {
    echo "info registrada correctamente";
}else {
    echo "error guardado";
}
?>