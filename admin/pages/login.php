
<!DOCTYPE html>
<html lang="zh-CN">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登陆</title>
<link rel="stylesheet" href="../css/style.css">
<?php 
    session_start();
    include "../php/dbutil.php";
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username!=""&&$password!=""){
        $sql = "select username,password from user where username='$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        if($result->num_rows>0){
                $row = mysqli_fetch_array($result);
                $_SESSION["user"] = $row;
                header("location:index1.php");
                exit();
            }else{
                echo '<script type="text/javascript">alert("用户名或密码错误")</script>';
            }
    }
?>
<body  style="background:url('../images/bg.jpg')no-repeat">
<div class="login-container" >
    <h1>欢迎登陆</h1>
    <form action="" method="post" id="loginForm">
        <div>
            <input type="text" name="username" class="username" placeholder="用户名" autocomplete="off"/>
        </div>
        <div>
            <input type="password" name="password" class="password" placeholder="密码" oncontextmenu="return false" onpaste="return false" />
        </div>
          <button id="submit" type="submit" name="submit"> 登 陆 </button> 
    </form>

    <a href="register.php">
        <button type="button" class="register-tis">还有没有账号？</button>
    </a>

</div>

</body>
<script src="../js/jquery.min.js"></script>
<script src="../js/common.js"></script>
<!--表单验证-->
<script src="../js/jquery.validate.js"></script>
</html>