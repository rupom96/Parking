<?php
include('conn_db.php');
session_start();
$rl= $_POST['role'];
if($rl=='User'){
	echo "User name is:";
	echo $_POST['username']
}
if else($rl=='Parking Owner'){

		echo "Parking owner is:";
	echo $_POST['username']
}

?>