<?php
	include "dbutil.php";
	$newsType = $_GET["newsType"];
	$clickPage = $_GET["clickPage"];
	if($newsType=="1"){
		$pageSize = 2;

		$countSql = " select count(0) size from jiequxinwen";
		$countResult = mysqli_query($conn,$countSql);
		$dataSize = mysqli_fetch_array($countResult,MYSQL_ASSOC)["size"];

		$pageNo = ceil($dataSize/$pageSize);
		$start = ($clickPage-1)*$pageSize;
		$sql2 = "select title,content,img,tm from jiequxinwen limit $start,$pageSize ";
		$result2 = mysqli_query($conn,$sql2);
		$data2 = array();
		$data2["pageNo"] = $pageNo;
		$data2["nowPage"] = $clickPage;
		$query = array();
		while($row2 = mysqli_fetch_array($result2,MYSQL_ASSOC)){
			$row2["img"]="admin2/img/".$row2["img"];
			array_push($query,$row2);
		}
		$data2["data"] = $query;
		echo json_encode($data2);
	}

	if($newsType=="2"){
		$pageSize = 5;

		$countSql = " select count(0) size from ruzhujigou";
		$countResult = mysqli_query($conn,$countSql);
		$dataSize = mysqli_fetch_array($countResult,MYSQL_ASSOC)["size"];

		$pageNo = ceil($dataSize/$pageSize);
		$start = ($clickPage-1)*$pageSize;
		$sql2 = "select title,content,img,tm from ruzhujigou limit $start,$pageSize ";
		$result2 = mysqli_query($conn,$sql2);
		$data2 = array();
		$data2["pageNo"] = $pageNo;
		$data2["nowPage"] = $clickPage;
		$query = array();
		while($row2 = mysqli_fetch_array($result2,MYSQL_ASSOC)){
			$row2["img"]="admin2/img/".$row2["img"];
			array_push($query,$row2);
		}
		$data2["data"] = $query;
		echo json_encode($data2);
	}

	if($newsType=="3"){
		$pageSize = 2;

		$countSql = " select count(0) size from jiequhuodong";
		$countResult = mysqli_query($conn,$countSql);
		$dataSize = mysqli_fetch_array($countResult,MYSQL_ASSOC)["size"];

		$pageNo = ceil($dataSize/$pageSize);
		$start = ($clickPage-1)*$pageSize;
		$sql2 = "select title,content,img,tm from jiequhuodong limit $start,$pageSize ";
		$result2 = mysqli_query($conn,$sql2);
		$data2 = array();
		$data2["pageNo"] = $pageNo;
		$data2["nowPage"] = $clickPage;
		$query = array();
		while($row2 = mysqli_fetch_array($result2,MYSQL_ASSOC)){
			$row2["img"]="admin2/img/".$row2["img"];
			array_push($query,$row2);
		}
		$data2["data"] = $query;
		echo json_encode($data2);
	}