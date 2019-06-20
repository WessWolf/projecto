<?php
require 'conexion.php';
$matricula=$_POST["matricula"];
$pass=$_POST["pass"];
$apepat=$_POST["apepat"];
$apemat=$_POST["apemat"];
$nombre=$_POST["nombre"];
$domicilio=$_POST["domicilio"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];

$sql=$pdoConexion->prepare("INSERT INTO alumnos VALUES (:matricula,:pass,:apepat,:apemat,:nombre,:domicilio,:telefono,:correo)");
$sql->bindParam('matricula',$matricula);
$sql->bindParam('pass',$pass);
$sql->bindParam('apepat',$apepat);
$sql->bindParam('apemat',$apemat);
$sql->bindParam('nombre',$nombre);
$sql->bindParam('domicilio',$domicilio);
$sql->bindParam('telefono',$telefono);
$sql->bindParam('correo',$correo);
$sql->execute();
//var_dump(sql);


if(is_null($sql)){
	echo 'Esta vivo! >:3';
}else {
	echo 'Error en toda tu puta gta jajajajaja';
}
?>