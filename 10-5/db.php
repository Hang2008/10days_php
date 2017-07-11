<?php
//课时24
$mysqli = new mysqli('localhost', 'root', '', 'php105');
echo "连接状态".$mysqli->connect_errno."<br>";
if ($mysqli->connect_errno > 0) {
    echo "数据库连接失败";
    exit(1);    
}
$mysqli->query("SET NAMES UTF8");
?>