<?php header('Content-Type: text/html; charset=utf-8')
?>
<?php
//防止被未授权调用
define('AAA', 'hello');
require_once ('form-common.php');
//接收前端传来的数据
$user = $_GET["user"];
$pwd = $_GET["pwd"];

//在新增之前，要判断用户名是否重复
//在双引号里，直接放变量是可以的，比如'$_username',但如果是数组，就必须加上{} ，比如 '{$_clean['username']}'
$search = "SELECT `username` FROM user WHERE username='$user'";
//获取记录集
$res = $conn -> query($search);
if ($res -> num_rows > 0) {
	echo '1';
} else {
	$sql="insert into user(username,userpass) values ('$user','$pwd')";
	$conn->query($sql);
	echo '0';
}
$conn->close();
?>