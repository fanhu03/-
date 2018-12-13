<?php header('Content-Type: text/html; charset=utf-8')
?>
<?php

	//防止被未授权调用
	define('AAA', 'hello');
	require_once ('form-common.php');
	//1、接收数据
	$img = $_GET['img'];
	
//	// 执行查询
	$sql = "SELECT * FROM goods WHERE img1='$img'";
	$query = $conn -> query($sql);
//	
	$str = "";
	while ($row = $query -> fetch_array(MYSQLI_ASSOC)) {
		$str = $str . '{"img1":"' . $row['img1'] . '","img2":"' . $row['img2'] . '","img3":"' . $row['img3'] . '","img4":"' . $row['img4'] . '","name":"' . $row['goodsname'] . '","price":"' . $row['price'] . '"}';
	}
	echo $str;
	//最后一步，关闭数据库
	mysqli_close($conn);
?>

