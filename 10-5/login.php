<?php
include('Input.class.php');
include('db.php');
session_start();
$input = new Input();

$act = $input->get('act');
if ($act !== false) {
	$username = $input->post('username');
	$password = $input->post('password');
	$check = "SELECT * FROM admin WHERE username='{$username}' and password='{$password}'";	
	echo $check;
	$mysqli_result = $mysqli->query($check);
	if ($mysqli_result) {
		$row = $mysqli_result->fetch_array();
		if ($row == false) {
			echo "用户不存在!";
		} else {
			echo "LOGIN SUCESS";
			$_SESSION['username'] = $row['username'];
			header("Location:page.php");
		}
	}
} 
?>

<!DOCTYPE html> 
<html> 
<head>
	<meta charset="utf-8">
	<title>管理员登陆</title>
	<style type="text/css">
		
	</style>
</head>
<body> 
	<form action="login.php?act=chk" method="post">
		<input type="text" name="username">
		<input type="password" name="password">
		<input type="submit" value="点击登录">
	</form>
</body> 
</html>