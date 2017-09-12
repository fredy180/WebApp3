<?php
session_start();
$_SESSION[ "idAdmin" ] = 0;
if ( $_POST ) {

	require( "conexion.php" );

	$id = $_POST[ 'usuario' ];
	$contra = $_POST[ 'password' ];
	$tipo = $_POST[ 'tipo' ];


	if ( $tipo == "Admin" ) {
		$sql2 = $mysqli->query( "SELECT * FROM `administrador` WHERE `idadministrador`='$id'" );
		if ( $fila = mysqli_fetch_assoc( $sql2 ) ) {

			if ( $id == $fila[ 'idadministrador' ] ) {
				if ( $contra == $fila[ 'nombreAdministrador' ] ) {
					$_SESSION[ "idAdmin" ] = $_POST[ 'usuario' ];
					echo "ok1";
					exit();
				} else {

					echo "Datos incorrecto";
					exit();
				}
			}
		}
	} else if ( $tipo == "Docen" ) {
		$sql2 = $mysqli->query( "SELECT * FROM `docente` WHERE `iddocente`='$id'" );
		if ( $fila = mysqli_fetch_assoc( $sql2 ) ) {

			if ( $id == $fila[ 'iddocente' ] ) {
				if ( $contra == $fila[ 'contraDocente' ] ) {
					$_SESSION[ "idAdmin" ] = $_POST[ 'usuario' ];
					echo json_encode("ok1");
					exit();
				} else {

					echo "Datos incorrectos";
					exit();
				}
			}

		}
	} else {
		$sql2 = $mysqli->query( "SELECT * FROM `estudiante` WHERE `idestudiante`='$id'" );
		if ( $fila = mysqli_fetch_assoc( $sql2 ) ) {

			if ( $id == $fila[ 'idestudiante' ] ) {
				if ( $contra == $fila[ 'contrasena' ] ) {
					$_SESSION[ "idAdmin" ] = $_POST[ 'usuario' ];
					$_SESSION[ "grado" ] = $fila[ "grado" ];
					echo "ok3";
					exit();
				} else {

					echo "Datos incorrecto";
					exit();
				}

			}

		}
	}



}
?>