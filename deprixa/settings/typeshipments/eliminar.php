<?php

 

include('../../database-settings.php');
include('../../library.php');
// asignamos la función de conexion a una variable
$con = conexion();
// recuperamos el id del usuario enviado por ajax
$id = $_POST['id'];
// eliminamos de la tabla hacemos una consulta SQL
$q = "DELETE FROM type_shipments WHERE id=$id";
// enviamos la consulta al método query
$con->query($q);
// log 
addLog('Delete', 'Delete tipe shipment id ' . $id . ' ', $_SESSION['user_name'], $_SESSION['user_type']);

// retornamos un mensaje de confirmación
echo json_encode(array('msg' => 'ok'));

?>