<?php
	include "dbutil.php";
	$newsType = $_GET["newsType"];
	$id = (int)$_GET["id"];
	if($newsType=="1"){
		$sql1 = "delete from jiequxinwen where id=".$id;
		$flag = mysqli_query($conn,$sql1);
		header("location:../pages/list.php?newsType=1");
	}
	if($newsType=="2"){
		$sql2 = "delete from ruzhujigou where id=".$id;
		$flag = mysqli_query($conn,$sql2);
		header("location:../pages/list.php?newsType=2");
	}
	if($newsType=="1"){
		$sql3 = "delete from jiequhuodong where id=".$id;
		$flag = mysqli_query($conn,$sql3);
		header("location:../pages/list.php?newsType=3");
	}