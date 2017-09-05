<?php 

	// 资源  resource
	
	//   fopen('文件地址','打开方式')  打开文件
	//   	打开方式 
	//   		r  只读
	//   		w  只写
	//   		r+ 读写
	//   		a  追加
	$a = fopen('./demo.php','r');
	var_dump($a);