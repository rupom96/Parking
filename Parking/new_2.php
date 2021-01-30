


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
include('conn_db.php');
session_start();

//1st try
/*//$rl= $_POST['role'];
//if($rl=='User'){
	$value = isset($_POST['username']) ? $_POST['username'] : '';
//empty()
$value = !empty($_POST['username']) ? $_POST['username'] : '';
	echo "User name is:";
	echo $value;
//}
else if($rl=='Parking Owner'){

		echo "Parking owner is:";
	echo $_POST['username'];
}
*/
//1st try


//2nd try
if(isset($_SESSION['user_id'])){
echo "session is";
echo $_SESSION['user_id'];
$username=$_SESSION['user_id'];
$sql="SELECT id FROM users WHERE username='$username'";
$result = mysqli_query($obj->conn, $sql);
echo $result;
}

 //2nd try
 

//3rd try
 /*if ($row = $_SESSION['user_id']->fetch_assoc()) {
	// echo $row['classtype']."<br>";
 }
 */
 //3rd try
 
 
 //4th try
/*$user_id=$_SESSION['user_id'];

//$ses_sql=mysqli_query($obj->conn,"SELECT username FROM users WHERE username='$user_check' ");

$row=mysqli_fetch_array($user_id,MYSQLI_ASSOC);

$l=$row['id'];
echo $l;
 //4th try
*/



?>
</body>
</html>