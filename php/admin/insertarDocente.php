<?php
session_start();

require( "../conexion.php" );

$identificacion = $_POST[ 'identificacion' ];
$contrasena = $_POST[ 'contrasena' ];
$nombre = $_POST[ 'nombre' ];
$apellido = $_POST[ 'apellido' ];
$grado = $_POST[ 'grado' ];
$sexo = $_POST[ 'sexo' ];
$telefono = $_POST[ 'telefono' ];
$idAdmin = $_SESSION[ "idAdmin" ];



$sql = "INSERT INTO `docente` (`iddocente`, `contraDocente`, `nombre`, `apellido`, `gradoEncargado`, `sexo`,`telefono` , `idAdministrador`) VALUES ('$identificacion', '$contrasena', '$nombre', '$apellido', '$grado', '$sexo', '$telefono','$idAdmin');";

if ( $mysqli->query( $sql ) === TRUE ) {
	echo( json_encode('-> Registro exitoso' ));

} else {
	echo json_encode('Error: -> ' . $mysqli->error);
}

$mysqli->close();
exit();
?>