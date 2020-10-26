<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="workout";
$db_table_name="usuarios";
   // $db_connection = mysql_connect($db_host, $db_user, $db_password);

   $db_connection = mysqli_connect($db_host , $db_user, $db_password, $db_name);

if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}
$subs_name = utf8_decode($_POST['nombre']);
$subs_last = utf8_decode($_POST['apellido']);
$subs_email = utf8_decode($_POST['email']);
$subs_password = utf8_decode($_POST['password']);

$resultado=mysqli_query("SELECT * FROM ".$db_table_name." WHERE email = '".$subs_email."'", $db_connection);

if (mysqli_num_rows($resultado)>0)
{

header('Location: Fail.html');

} else {
	
	$insert_value = 'INSERT INTO `' . $db_name . '`.` '. $db_table_name . '` (`nombre`, `apellido`, `email`, `password`) VALUES ("' . $subs_name . '", "' . $subs_last . '", "' . $subs_email . '", "' . $subs_password . '")';

mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);

if (!$retry_value) {
   die('Error: ' . mysql_error());
}
	
header('Location: Success.html');
}

mysql_close($db_connection);
		
?>