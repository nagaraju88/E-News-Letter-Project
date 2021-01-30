<?php
  $server = "localhost";
  $user = "root";
  $password = "";
  $conn = new mysqli($server,$user,$password);
  if($conn){
      echo "connected";
  }
$sql = "create database studentCert";
if($conn->query($sql))
{
    echo "database created";
}
else {
    echo "error" . $conn->error;
}
?>