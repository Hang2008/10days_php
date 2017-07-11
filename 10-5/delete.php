<?php
include('db.php');
session_start();
$user = $_SESSION['username'];
if (is_null($user)) {
    header("Location:login.php");
    exit(1);
}
$id = $_GET['id'];
$delete_sql = "DELETE FROM comments WHERE id = '{$id}'";
if ($mysqli->query($delete_sql) == false) {
    echo "删除失败";
} else {
    echo $user." 删除了".$id;
    header("Location:page.php");
}
?>