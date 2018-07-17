<?php
require_once 'dbconfig.php';
header("content-type:text/html;charset=utf-8");
if (! isset ( $_SESSION )) {
  session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
  header ( "location:login.php" );
} else {
  $newsTitle=$_POST['newstitle'];
  $newsJianjie=$_POST['newsjianjie'];
  $newsContent=$_POST['newscontent'];
  if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/png"))){
    if ($_FILES["file"]["error"] > 0)
    {
      echo "Error: " . $_FILES["file"]["error"] . "<br />";
    }
    else
    {
        move_uploaded_file($_FILES["file"]["tmp_name"],
          "upload/" . iconv("UTF-8", "gbk",$_FILES["file"]["name"]));
        $protocol = empty($_SERVER['HTTP_X_CLIENT_PROTO']) ? 'http:' : $_SERVER['HTTP_X_CLIENT_PROTO'] . ':';
        $newsImage=$protocol."//".$_SERVER['SERVER_NAME']."/tea/upload/" . $_FILES["file"]["name"];
        $sql = "INSERT INTO news(id, newsTitle, newsJianjie, newsContent, newsImage) VALUES (null,'$newsTitle','$newsJianjie','$newsContent','$newsImage')";
        if (mysql_query ( $sql )) {
          echo "添加成功！！！<br/>";
          echo "<a href='news.php'>返回</a>";
        } else {
          echo "添加失败！！！<br/>";
          echo "<a href='news.php'>返回</a>";
        }

    }
  }else{
    echo "请选择图片";
    echo "<a href='news.php'>返回</a>";
  }
}
?>