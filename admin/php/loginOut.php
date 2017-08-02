<?php
	session_start();

	//unset($_SESSION["user"]);

	//销毁session
	// 让服务器清空当前session 中所有数据，并删除sessionID
	// 开启一个新的sessionID
	session_destroy();

	header("location:../pages/login.php");