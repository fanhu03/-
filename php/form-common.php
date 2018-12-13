<?php 
	header('Content-Type: text/html; charset=utf-8');

	//防止被未授权调用
//	define('AAA', 'hello');
	//判断是否授权
	// if(!defined('AAA')){
	// 	echo "<script>alert('你非法登录，请重新登录');window.location.href='register.php';</script>";
	// }
	
	//设置常量，用于设定服务的用户名之类
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PWD','root');
	define('DB_NAME','ajax');
	
	//第一步,创建连接DB服务器
	$conn = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
	//第二步， 设置字符集，防止中文乱码
	$conn->query('SET NAMES UTF8');
	//检测连接
	if ($conn->connect_error) {
	    die("连接失败: " . $conn->connect_error);
	}
?>












