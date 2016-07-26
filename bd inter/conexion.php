<?php
//Datos para la conexion
$servidor = "sql207.byethost15.com";
$bd = "b15_17277967_siiaup";
$usuario="b15_17277967";
$password = "Giovanny53";

//Conectar a MySql
$conexion = mysql_connect($servidor, $usuario, $password);
if (!$conexion){
	exit("Error de conexion a mysql: " + mysql_error() );
}

//seleccionar nuestra base de datos
$db_selected = mysql_select_db($bd, $conexion);
if(!$db_selected){
	exit("Error de conexion a mysql: " + mysql_error() );
}else{
	echo "Conexion exitosa.";
}
 
?>