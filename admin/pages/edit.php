<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="../css/pintuer.css">
<link rel="stylesheet" href="../css/admin.css">
<script src="../js/jquery.js"></script>
<?php
    include "../php/dbutil.php";
    $newsType = $_GET["newsType"];
    $id = $_GET["id"];
    if ($newsType=="1") {  
      $sql1 = "select id,title,content,img,tm from jiequxinwen where id = ".$id;
      $result = mysqli_query($conn,$sql1);
      $row = mysqli_fetch_array($result,MYSQL_ASSOC);
      $img = "../img/".$row["img"];
    }
    if ($newsType=="2") {  
      $sql2 = "select id,title,content,img,tm from ruzhujigou where id = ".$id;
      $result = mysqli_query($conn,$sql2);
      $row = mysqli_fetch_array($result,MYSQL_ASSOC);
      $img = "../img/".$row["img"];
    }
    if ($newsType=="3") {  
      $sql3 = "select id,title,content,img,tm from jiequhuodong where id = ".$id;
      $result = mysqli_query($conn,$sql3);
      $row = mysqli_fetch_array($result,MYSQL_ASSOC);
      $img = "../img/".$row["img"];
    }

?>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="../php/edit.php" enctype='multipart/form-data'>
    <?php
      echo '<input type="hidden" name="newsType" value="'.$newsType.'">';
      echo '<input type="hidden" name="id" value="'.$id.'">';
    ?>
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $row['title']; ?>" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" id="url1"  name="img" class="input tips" style="width:25%; float:left;"   data-toggle="hover" data-place="right" data-image="" />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
          <textarea name="content" class="input" style="height:200px; border:1px solid #ddd;"><?php echo $row['content'] ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body></html>