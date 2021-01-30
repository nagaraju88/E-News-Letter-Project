<?php
$servername="localhost";
$username="root";
$password="";
$dbname="majproject";
$raju=new mysqli($servername,$username,$password,$dbname);
$sql="CREATE TABLE lavanya( month VARCHAR(30),usrname VARCHAR(30),design VARCHAR(20),qualf VARCHAR(20),email VARCHAR(50),telnumber VARCHAR(12),workexp VARCHAR(10),speclz VARCHAR(20),subjtght VARCHAR(10))";
if($raju->query($sql))
{
    echo "table created";
}
else
{
    echo "error" .$raju->error;
}
?>