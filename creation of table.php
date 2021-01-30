<?php
$servername="localhost";
$username="root";
$password="";
$dbname="majproject";
$raju=new mysqli($servername,$username,$password,$dbname);
$sql="CREATE TABLE nagaraju( uname VARCHAR(30) UNIQUE,cpword VARCHAR(20),email VARCHAR(50) UNIQUE,phonenumber VARCHAR(12) UNIQUE,uoperationf VARCHAR(50))";
if($raju->query($sql))
{
    echo "table created";
}
else
{
    echo "error" .$raju->error;
}
?>