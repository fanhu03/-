<?php
	header('Content-Type: text/html; charset=utf-8');
	$username = $_GET['username'];
	$userpass = $_GET['userpass'];
	$con = mysql_connect("localhost","root","root");
	if(!$con){
		//数据库连接失败
		mysql_close($con);
	}
	else{
		mysql_select_db("ajax",$con);
		$sqlstr = "SELECT `username` FROM user WHERE username='$username' and userpass='$userpass'";

		//这块是执行上一个查询代码
		$result = mysql_query($sqlstr,$con);
		//在整个数据库中进行查找，若找到，则其行数大于等于1；
		//else，没找到则行数等于0
		$rows = mysql_num_rows($result);
		if($rows>0){
			//找到了，
			echo "1";
		}else{
			echo "0";
		}
		mysql_close($con);
	}
?>