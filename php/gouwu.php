
<?php header('Content-Type: text/html; charset=utf-8')
?>
<?php

	//防止被未授权调用
	define('AAA', 'hello');
	require_once ('form-common.php');
	//1、接收数据
	$img = $_GET['img'];
	
//	// 执行查询
	$sql = "SELECT * FROM goodsnam WHERE img='$img'";
	$query = $conn -> query($sql);
//	
	$str = "";
	while ($row = $query -> fetch_array(MYSQLI_ASSOC)) {
		$str = $str . '{"img":"' . $row['img'] . '","name":"' . $row['goodsname'] . '","price":"' . $row['price'] . '"}';
	}
	echo $str;
	//最后一步，关闭数据库
	mysqli_close($conn);
?>

