<?php
	include "dbutil.php";
	$newsType = $_POST["newsType"];
	$title =  $_POST["title"];
	$content = $_POST["content"];
	$tm = date("y-m-d",time());
	if($title==""||$content==""||$_FILES["img"]["error"]>0){
		 header("location:../pages/add.php");
	}else{
		if($newsType=="1"){
		 	$newName=time().rand(1000,9999).$_FILES["img"]["name"];
		 	move_uploaded_file($_FILES["img"]["tmp_name"],"../img/".$newName);
		 	$sql = "insert into jiequxinwen values(null,'$title','$content','$newName','$tm')";
		 	$flag = mysqli_query($conn,$sql);
		 	header("location:../pages/list.php?newsType=1");
		}
		if($newsType=="2"){
		 	$newName=time().rand(1000,9999).$_FILES["img"]["name"];
		 	move_uploaded_file($_FILES["img"]["tmp_name"],"../img/".$newName);
		 	$sql1 = "insert into ruzhujigou values(null,'$title','$content','$newName','$tm')";
		 	$flag = mysqli_query($conn,$sql1);
		 	header("location:../pages/list.php?newsType=2");
			
		}
		if($newsType=="3"){
		 	$newName=time().rand(1000,9999).$_FILES["img"]["name"];
		 	move_uploaded_file($_FILES["img"]["tmp_name"],"../img/".$newName);
		 	$sql2 = "insert into jiequhuodong values(null,'$title','$content','$newName','$tm')";
		 	$flag = mysqli_query($conn,$sql2);
		 	header("location:../pages/list.php?newsType=3");
		}
	}