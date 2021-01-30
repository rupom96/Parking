<?php
include('conn_db.php');
session_start();
$user_check=$_SESSION['login_user'];

$ses_sql=mysqli_query($obj->conn,"SELECT username FROM users WHERE username='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session=$row['username'];

if(!isset($login_session))
{
header("Location: login.php");
}
?>