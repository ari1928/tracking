<?php 

 
error_reporting(E_ERROR | E_WARNING | E_PARSE);

require_once('database.php');
require_once('funciones.php');
function verify_users($user='',$pwd='', $estado='') {

			$con = conexion();
			$sql = "SELECT * FROM manager_admin WHERE name = '$user' AND pwd = '$pwd' AND estado = '1'";
			$result = $con->query($sql);
			$row = $result->fetch_assoc();
			$resultno = dbQuery($sql);	
			$no = dbNumRows($resultno);		
			if($no >= 1) {
					$_SESSION['user_name']= $row['name_parson'];	
					$_SESSION['user_type']= $row['role'];
					echo '<div class="alert alert-succes" role="alert" align="center">
					<strong>Welcome<br><br>'.$user.'</strong></div>';
					echo '<center><img src="deprixa/images/balls.gif"></center><br>';
					echo '<meta http-equiv="refresh"  content="2;url=deprixa/admin.php">';
					
			} else {				
			$sql = "SELECT name_parson	FROM manager_user WHERE name = '$user' AND pwd = '$pwd' AND estado = '1'";
			$result = dbQuery($sql);		
			$no = dbNumRows($result);		
			if($no >= 1) {

					$_SESSION['user_name']= $user;	
					$_SESSION['user_type']= 'Employee';
					echo '<div class="alert alert-succes" role="alert" align="center">
					<strong>Welcome<br><br>'.$user.'</strong></div>';
					echo '<center><img src="deprixa/images/balls.gif"></center><br>';
					echo '<meta http-equiv="refresh"  content="2;url=deprixa/admin.php">';
		
			
			} else {
				
				$sql = "SELECT name	FROM tbl_clients WHERE email = '$user' AND password = '$pwd' AND estado = '1'";
				$result = dbQuery($sql);
				$no = dbNumRows($result);
			if($no >= 1) {
					$_SESSION['user_name']= $user;
					$_SESSION['user_type']= 'client';	
					echo '<div class="alert alert-succes" role="alert" align="center">
					<strong>Welcome<br><br>'.$user.'</strong></div>';
					echo '<center><img src="deprixa/images/balls.gif"></center><br>';
					echo '<meta http-equiv="refresh"  content="2;url=deprixa/panel-customer/customer.php">';
			}	else {
				echo mensajes('Username and password incorrect<br>','rojo'); 
				echo '<center><a href="login.php" class="btn btn-success"><strong>Try again</strong></a></center>';
			}		
		}//else
	}

}

function isUser(){
	if(!isset($_SESSION['user_name'])){
		header('Location: deprixa/admin.php');
	}
	
}

function addLog($aksi, $info, $user, $role)
{
	$ip = $_SERVER['REMOTE_ADDR'];
	$device = $_SERVER['HTTP_USER_AGENT'];
	$date = date('Y-m-d H:i:s');
	$sql = "INSERT INTO log (ip, date, aksi, info, device, user, role)
			VALUES ('$ip', '$date', '$aksi', '$info', '$device', '$user', '$role')";
	dbQuery($sql);
}
?>