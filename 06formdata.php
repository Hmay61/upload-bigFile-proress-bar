<?php
	if($_FILES['image']['error']>0){
		exit('error');
	}
	//1：the name of the loacation of the attachment
	$path = "./upload/";
	$name = mt_rand(1000,9999).$_FILES['image']['name'];   //original name, the reason to use mt_rand, in order to test conveniently
	$truename = $path.$name; 
	//2: move the attachment from temp lacation to real location: move_uplodaed_file();
	if(move_uploaded_file($_FILES['image']['tmp_name'],$truename)){
		echo "upload success";
	}
	else {
		echo "upload fail";
	}
?>
