<?php
$servername="localhost";
$username="root";
$password="";
$dbname="majproject";
$raju=new mysqli($servername,$username,$password,$dbname);
$sql="CREATE TABLE amma(image longblob,month VARCHAR(30),stdname VARCHAR(30),qualf VARCHAR(20),email VARCHAR(50),telnumber VARCHAR(12),speclz VARCHAR(10),eventname VARCHAR(50),certified VARCHAR(10))";
if($raju->query($sql))
{
    echo "table created";
}
else
{
    echo "error" .$raju->error;
}
?>
