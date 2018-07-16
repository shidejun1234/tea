<?php
    include('dbconfig.php');
    $sql="select id,newsTitle,newsJianjie,newsUrl,newsImage from news";
    $query=mysql_query($sql);
    while($rs=mysql_fetch_array($query)){
        $output[]=array('id'=>$rs['id'],'newsTitle'=>$rs['newsTitle'],'newsJianjie'=>$rs['newsJianjie'],'newsUrl'=>$rs['newsUrl'],'newsImage'=>$rs['newsImage']);
    }
    echo json_encode($output,320);
?>