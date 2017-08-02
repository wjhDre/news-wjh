<?php
	include "dbutil.php";
	$newsType = $_GET["newsType"];
	if($newsType=="1"){
		$sql1 = "select title,content,img,tm from jiequxinwen";
		$result = mysqli_query($conn,$sql1);
		$data = array();
		while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
			$row["img"]="admin2/img/".$row["img"];
			array_push($data,$row);
		}
		echo json_encode($data);
	}
	if($newsType=="2"){
		$sql2 = "select title,content,img,tm from ruzhujigou";
		$result2 = mysqli_query($conn,$sql2);
		$data2 = array();
		while($row2 = mysqli_fetch_array($result2,MYSQL_ASSOC)){
			$row2["img"]="admin2/img/".$row2["img"];
			array_push($data2,$row2);
		}
		$query = array_chunk($data2, 3);
		echo json_encode($query);
	}
	if($newsType=="3"){
		$sql3 = "select title,content,img,tm from jiequhuodong";
		$result3 = mysqli_query($conn,$sql3);
		$data3 = array();
		while($row3 = mysqli_fetch_array($result3,MYSQL_ASSOC)){
			$row3["img"]="admin2/img/".$row3["img"];
			array_push($data3,$row3);
		}
		echo json_encode($data3);
	}