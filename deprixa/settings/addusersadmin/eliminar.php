<?php


include('../../database-settings.php');
include('../../library.php');
// asignamos la función de conexion a una variable
$con = conexion();
// recuperamos el id del usuario enviado por ajax
$cid = $_POST['cid'];
// eliminamos de la tabla hacemos una consulta SQL
$q = "DELETE FROM manager_admin WHERE cid=$cid";
// enviamos la consulta al método query
$con->query($q);
// log 
addLog('Delete', 'Delete User id ' . $cid . ' ', $_SESSION['user_name'], $_SESSION['user_type']);

// retornamos un mensaje de confirmación
echo json_encode(array('msg' => 'ok'));

?>