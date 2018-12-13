<?php
	header('Content-Type: text/html; charset=utf-8');
	$username = $_GET['shoujiVal'];
	$userpass = $_GET['pwd'];
	$con = mysql_connect("localhost","root","root");
	if(!$con){
		//数据库连接失败
		mysql_close($con);
	}
	else{
		mysql_select_db("ajax",$con);
		$sqlstr = "insert into user values('$username','$userpass')";
		//这块是执行插入语句
		$result = mysql_query($sqlstr,$con);
		
		if($result){
			
			echo "1";
		}else{
			echo "0";
		}
		mysql_close($con);
	}
?>