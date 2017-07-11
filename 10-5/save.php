<h1>Server</h1>
<?php
include('Input.class.php');
include('db.php');
//课时前面
// $str = "Server";
// echo $str . " end";
// var_dump($str);
// $str1 = "$str option";
// echo $str1;

//课时13
// var_dump($_POST);

// $aArray = array(1,2,3,'a' => 4);
// var_dump($aArray);
// echo "<br>$aArray[2]<br>";
// $aArray['b'] = 1;
// $aArray['b'] = 2;
// var_dump($aArray);
// unset($aArray[1]);
// var_dump($aArray);

//课时17
// function post($key) {
//     return $_POST[$key];
// }
// echo post('user') . "ssss";
// echo post('msg') . "ssss";

//课时21
$input = new Input();
// $input->get('user');
// $input->get('msg');
$msg = $input->post('msg');
$user = $input->post('user');
//课时14
// $msg  = $_POST["msg"];
// $user  = $_POST["user"];

if ($msg == '' || $user == '') {
    echo "it is not allowed null value!<br>";
    exit("程序退出了!");
} else {
    echo "$user 发表了言论 $msg<br>";
}
//课时27
// $result = $mysqli->query("SELECT `username` FROM `comments` LIMIT 10");
$t = time();
$sql_insert = "INSERT INTO comments (`username`, `content`, `timestamp`) VALUES ('{$user}', '{$msg}', '{$t}')";
echo $sql_insert;
$result = $mysqli->query($sql_insert);
if ($result == TRUE) {
    header("Location:page.php");
} else {
    echo "NO!";
}
?>
