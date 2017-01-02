<?php
	$name=$_POST['title'];
	$language=$_POST["language"];
	$code=$_POST['code'];

	if($name!="" and $language!="" and $code!=""){
		$path="code/".$language."/".$name;
		$fp = fopen($path, 'w');
		fwrite($fp, $code);
		fclose($fp);
		echo "<script> alert('Tank you for your contrib ;)');window.location.replace('index.php'); </script>";
	}else{
		echo "<script> alert('Empty Fields');window.history.back(); </script>";
	}
?>