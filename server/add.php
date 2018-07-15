<?php
    include('conn.php');
    $uName=$_POST['uName'];
    $phone=$_POST['phone'];
    $liuyan=$_POST['liuyan'];
    $time=$_POST['time'];
    if($uName==""){
        echo "别秀了！";
        exit;
    }
    $sql="INSERT INTO `person`(`uName`, `phone`, `liuyan`, `time`, `state`) VALUES ('$uName','$phone','$liuyan','$time','已留言')";
    $query=mysql_query($sql);
    if ($query) {
        echo "留言成功";
    }else{
        echo "留言失败";
    }
?>