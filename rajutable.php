<?php
  $server = "localhost";
  $user = "root";
  $password = "";
  $dbname = "studentCert";
  $conn = new mysqli($server,$user,$password,$dbname);
  if($conn){
      echo "connected";
  }
$sql = "create table raju7( id int(20) auto_increment,username varchar(100),year varchar(100), mail varchar(250),filename varchar(250),filetype varchar(250),filedata varchar(250),primary key(id))";
if($conn->query($sql))
{
    echo "table created";
}
else {
    echo "error" . $conn->error;
}
?>