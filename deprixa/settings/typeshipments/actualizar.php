<?php


include('../../database-settings.php');
require_once('../../library.php');
// asignamos la función de conexion a una variable
$con = conexion();
// recuperamos el id del off_name enviado por ajax
$id = $_POST['id'];
// recuperamos y asignamos a variables los campos enviados por ajax metodo POST
$name = $_POST['name'];
$packaging = $_POST['packaging'];
$dimensions = $_POST['dimensions'];
// verificamos si esta marcado el check box activo
if(isset($_POST['estado']))
$estado = $_POST['estado'];
else
$estado = 0;


// Cotroles Basicos, evitar campos vacios
if(empty($name)){
	echo json_encode(array('msg' => 'nomvacio')); //retornamos mensaje de error
	exit(); // salimos de la ejecución
}
elseif(empty($packaging)){
	echo json_encode(array('msg' => 'apevacio'));
	exit();
}
elseif(empty($dimensions)){
	echo json_encode(array('msg' => 'telvacio'));
	exit();
}

else{	
	// verificamos si esta cambiando el password
	if(empty($password)) // actualizamos la información del off_name hacemos una consulta SQL
	$consulta = "UPDATE type_shipments SET name='$name', packaging='$packaging', dimensions='$dimensions', estado='$estado' WHERE id='$id'";
	else{
	$password = md5($password); // encriptamos la nueva contraseña
	$consulta = "UPDATE type_shipments SET name='$name', packaging='$packaging', dimensions='$dimensions', estado='$estado' WHERE id='$id'";	
	}

	// add log
	addLog('Update', 'Update Tipe Produk ' . $name . ' ', $_SESSION['user_name'], $_SESSION['user_type']);
}

// enviamos la consulta al método query
$con->query($consulta);
// retornamos un mensaje de confirmación
echo json_encode(array('msg' => 'ok'));

?>