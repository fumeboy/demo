<?php
    header("Content-type:text/html;charset=utf8");

    require 'conn.php';

    $pid=$_GET['index'];//获得$.getJSON发来的数据

    $sql="select * from city where pid=$pid order by corder";

    $city="[";//$city保存JSON格式字符串

    $i=0;

    $result=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($result)) {

    	$city=$city."{cid:".$row['cid'].",cname:'".$row['cname']."'}";

    	if (mysqli_num_rows($result)!=++$i) {
    		$city=$city.'';//如果不是最后一条记录
    	}
    }
    $city=$city."]";
    
    echo $city;//输出JSON格式字符串
?>