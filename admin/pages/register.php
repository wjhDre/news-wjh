
<!DOCTYPE html>
<html lang="zh-CN">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册</title>
<link rel="stylesheet" href="../css/style.css">
<?php 
    include "../php/dbutil.php";
    $username = $_POST["username2"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    if($username!=""&&$password!=""&&$email!=""){
        $sql1 = "select username from user where username='$username'";
        $result = mysqli_query($conn,$sql1);
        if($result->num_rows>0){
            echo '<script type="text/javascript">
                alert("用户名已存在")   
              </script>';
            // header("location:register.html");
        }else{
            $sql2 = "insert into user values(null,'$username','$password','$email')";
            $flag = mysqli_query($conn,$sql2);
            header("location:login.php");  
        }
    }
?>
<body style="background:url('../images/bg.jpg')no-repeat">
<div class="register-container">
    <h1>欢迎注册</h1>
    <form action="" method="post" id="registerForm">
        <div>
            <input type="text" name="username2" class="username" placeholder="您的用户名" autocomplete="off"/>
        </div>
        <div>
            <input type="password" name="password" class="password" placeholder="输入密码" oncontextmenu="return false" onpaste="return false" />
        </div>
        <div>
            <input type="password" name="confirm_password" class="confirm_password" placeholder="再次输入密码" oncontextmenu="return false" onpaste="return false" />
        </div>
        <div>
            <input type="email" name="email" class="email" placeholder="输入邮箱地址" oncontextmenu="return false" onpaste="return false" />
        </div>

        <button id="submit" type="submit" name="submit">注 册</button>
    </form>
    <a href="login.html">
        <button type="button" class="register-tis">已经有账号？</button>
    </a>

</div>

</body>
<script src="../js/jquery.min.js"></script>
<script src="../js/common.js"></script>
<!--表单验证-->
<script src="../js/jquery.validate.js"></script>
</html>