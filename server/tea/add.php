<?php
    include('dbconfig.php');
    $uName=$_POST['uName'];
    $phone=$_POST['phone'];
    $liuyan=$_POST['liuyan'];
    $time=$_POST['time'];
    if($uName==""){
        echo "别秀了！";
        exit;
    }
    $sql="INSERT INTO `person`(`uName`, `phone`, `liuyan`, `time`, `stats`) VALUES ('$uName','$phone','$liuyan','$time','0')";
    $query=mysql_query($sql);
    if ($query) {
        echo "留言成功";
    }else{
        echo "留言失败";
    }
?>zfcadsfassad