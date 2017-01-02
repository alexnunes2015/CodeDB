<?php
	$name=$_POST['query'];
	$language=$_POST['language'];

	$words=explode(" ", $name);

	$finded="";
	foreach(scandir("code/".$language) as $file){
		if($file!="." and $file!=".."){
			$i=0;
			foreach($words as $word){
				if (strpos($file, $word) !== false) {
    			$i++;
				}
			}
			if($i>0){
				$finded=$file;
				break;
			}
		}
	}
	if($finded!=""){
		echo "<script> window.location.replace('view.php?tname=".$finded."&fname=code/".$language."/".$finded."'); </script>";
	}else{
		echo "<script> alert('Not found :(');window.location.replace('index.php'); </script>";
	}
?>