<?php
  //设置时区为中国时区
  date_default_timezone_set('Asia/Shanghai'); 
  //连接数据库服务器
  $conn=mysqli_connect("localhost","root","root");
  //设置数据库字符集
  mysqli_query($conn,"set names 'utf8'");
  //连接数据库
  mysqli_select_db($conn,"testdb");
?>