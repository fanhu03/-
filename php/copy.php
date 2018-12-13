<?php
 header('Content-Type: text/html; charset=utf-8')
?>

<?php
	require_once ('form-common.php');
	
	$bgimg=$_POST['bgimg'];
	$shopInfo=$_POST['shopInfo'];	
	$price=$_POST['price'];
	$sql="insert into shoping(img,goodsname,price) values ('$bgimg','$shopInfo','$price')";
	$conn->query($sql);
	$conn->close();
	echo "1";
?>
