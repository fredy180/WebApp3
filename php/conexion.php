
<?php
	
	$mysqli = new mysqli("127.0.0.1", "root", "root", "portalmate");
if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}



?>