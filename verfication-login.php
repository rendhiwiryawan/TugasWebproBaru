<?php
session_start();
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' and password='$password'");


if($check >= 1){
	$data_profil = mysqli_query($conn,"SELECT * FROM profile WHERE username='$username'");
	$row_acc = mysqli_fetch_array($data_profile);
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$_SESSION["name"] = $row_acc["name"];
	$_SESSION["website"] = $row_acc["website"];
	$_SESSION["biography"] = $row_acc["biography"];
	$_SESSION["email"] = $row_acc["email"];
	$_SESSION["nohp"] = $row_acc["nohp"];
	$_SESSION["jeniskelamin"] = $row_acc["jeniskelamin"];
	header("location:feed.php");
}else{
	header("location:index.php");
}
?>