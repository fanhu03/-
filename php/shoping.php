<?php header('Content-Type: text/html; charset=utf-8')
?>
<?php
	require_once ('form-common.php');
	$search="select * from goodsnam";
	$query = $conn -> query($search);
	$str = "";
	while ($row = $query -> fetch_array(MYSQLI_ASSOC)) {
		$str = $str.'{"img":"' . $row['img'] . '","goodsname":"' . $row['goodsname'] . '","price":"' . $row['price'] .'"}#';
	}
	echo $str;
//最后一步，关闭数据库
mysqli_close($conn);
?>