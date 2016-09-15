<?php
	//收集form表单传递过来的post信息（普通表单域 和上传文件域信息）
	//echo 'POST: ';
	//print_r($_POST);  //普通表单域

	//echo 'FILE: ';
	//print_r($_FILES); //文件域信息
	
	//07的php代码，上传附件
	//判断附件是否有问题
	if($_FILES['image']['error']>0){
		exit('error');
	}
	//1：附件的存储位置，附件的名字
	$path = "./upload/";
	$name = mt_rand(1000,9999).$_FILES['image']['name'];   //原名字  在前面加一个mt_rand的目的是为了生成随机数，这样同一个文件上传，都会保存起来了。
	$truename = $path.$name;
	//2: 把附件从临时路径 移动到 真实位置 ，move_uplodaed_file();
	if(move_uploaded_file($_FILES['image']['tmp_name'],$truename)){
		echo "upload success";
	}
	else {
		echo "upload fail";
	}





	//连接数数据库，
?>