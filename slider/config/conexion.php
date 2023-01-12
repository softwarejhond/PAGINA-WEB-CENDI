<?php
$DB_HOST="157.90.91.29";//Servidor donde se encuentra alojada nuestra base de datos
$DB_NAME= "agenciae_carruselCendi";// Nombre de la base de datos
$DB_USER= "agenciae";//Usuario de la base de datos
$DB_PASS= "q294g.#PwM9SYy";//Contraseña del usuario de la base de datos
	# conectare la base de datos
    $con=@mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>