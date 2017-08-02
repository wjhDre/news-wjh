<?php
	include "dbutil.php";
	$newsType = $_POST["newsType"];
	$id = (int)$_POST["id"];
	$title =  $_POST["title"];
	$content = $_POST["content"];
	$tm = date("y-m-d",time());
	if($title==""||$content==""){
		 header("location:../php/edit.php");
	}else{
		if($_FILES["img"]["error"]>0){
			if($newsType=="1"){
				$sql1 = "update jiequxinwen set title='$title',content='$content' where id=".$id;	
				$flag = mysqli_query($conn,$sql1);
				header("location:../pages/list.php?newsType=1");
			}
			if($newsType=="2"){
				$sql2 = "update ruzhujigou set title='$title',content='$content' where id=".$id;	
				$flag = mysqli_query($conn,$sql2);
				header("location:../pages/list.php?newsType=2");
			}
			if($newsType=="3"){
				$sql3 = "update jiequhuodong set title='$title',content='$content' where id=".$id;	
				$flag = mysqli_query($conn,$sql3);
				header("location:../pages/list.php?newsType=3");
			}
		}else{
			if($newsType=="1"){
			 	$newName=time().rand(1000,9999).$_FILES["img"]["name"];
			 	move_uploaded_file($_FILES["img"]["tmp_name"],"../img/".$newName);
			 	$sql4 = "update jiequxinwen set title='$title',content='$content',img='$newName' where id=".$id;
			 	$flag = mysqli_query($conn,$sql4);
			 	header("location:../pages/list.php?newsType=1");
			}
			if($newsType=="2"){
			 	$newName=time().rand(1000,9999).$_FILES["img"]["name"];
			 	move_uploaded_file($_FILES["img"]["tmp_name"],"../img/".$newName);
			 	$sql5 = "update jiequxinwen set title='$title',content='$content',img='$newName' where id=".$id;
			 	$flag = mysqli_query($conn,$sql5);
			 	header("location:../pages/list.php?newsType=2");
				
			}
			if($newsType=="3"){
			 	$newName=time().rand(1000,9999).$_FILES["img"]["name"];
			 	move_uploaded_file($_FILES["img"]["tmp_name"],"../img/".$newName);
			 	$sql6 = "update jiequxinwen set title='$title',content='$content',img='$newName' where id=".$id;
			 	$flag = mysqli_query($conn,$sql6);
			 	header("location:../pages/list.php?newsType=3");
			}
		}
	}