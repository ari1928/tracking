<?php


include('../../database-settings.php');
include('../../library.php');
// asignamos la función de conexion a una variable
$con = conexion();
// recuperamos el id del usuario enviado por ajax
$cid = $_POST['cid'];
// recuperamos el estado del usuario hacemos una consulta SQL
$q = "SELECT estado FROM manager_user WHERE cid='$cid'";
// asignamos a una variable la consulta devuelta por el método query
$resultado = $con->query($q);
// camvertimos en array la consulta utilizando el método fetch_assoc
$estado = $resultado->fetch_assoc();
// verificamos si esta activo o inactivo
if($estado['estado'] == '1'){
	// Cambiamos el estado a inactivo
	$q = "UPDATE manager_user SET estado='0' WHERE cid='$cid'";
}
else{
	// Cambiamos el estado a activo
	$q = "UPDATE manager_user SET estado='1' WHERE cid='$cid'";
}
// pasamos la consulta según el resultado de la verificación
$con->query($q);
addLog('Update', 'Update data user ' . $id . ' ', $_SESSION['user_name'], $_SESSION['user_type']);	
// retornamos un mensaje de confirmación
echo json_encode(array('msg' => 'ok'));

?>