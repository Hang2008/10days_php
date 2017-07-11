<?php
session_start();
var_dump($_SESSION);
include('db.php');
$getdata = "SELECT * FROM comments ORDER BY id DESC";
$data = $mysqli->query($getdata);
while ($row = $data->fetch_array(MYSQLI_ASSOC)) {	
	$rows[] = $row;
}
// var_dump($rows);

?>
<!DOCTYPE html> 
<html> 
<head>
	<meta charset="utf-8">
	<title>留言板</title>
	<style type="text/css">
		.add {
			width: 600px;
			margin: 0px auto;
			background-color: #ccc;
			overflow: hidden;
		}
		.add textarea {
			width: 99%;
			height: 100px;
		}
		.name-input {
			float: left;
		}
		.submit-btn {
			float: right;
		}
		.msg {
			width: 600px;
			margin: 0px auto;
			background-color: #ccc;
			overflow: hidden;
		}
	</style>
</head>
<body> 
	<div class="add">
		<form action="save.php" method="post">
			<textarea name="msg">留言内容</textarea>
			<input class="name-input" type="text" name="user">
			<input class="submit-btn" type="submit" value="发表">
		</form>
		<a class="btn" href="login.php">登录</a>
	</div>
	<div class="msg">
		<?php
		// for ($i=0;$i<count($rows);$i++) {
		// 	echo $rows[$i]['id'];
		foreach ($rows as $item) {
			?>
			<div class="item">
				<span><?php echo $item['username'];?></span>
				<span><?php echo date("Y年m月d日 H:i:s", $item['timestamp']);?></span>
				<?php if (isset($_SESSION['username'])) {?>
				<span><a href="delete.php?id=<?php echo $item['id'];?>">删除</a></span>
				<?php }?>
				<p>
					<?php echo $item['content'];?>
				</p>
			</div>
			<?php
		}
		?>
	</div>
</body> 
</html>