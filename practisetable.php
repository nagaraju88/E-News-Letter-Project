<?php
$servername="localhost";
$username="root";
$password="";
$dbname="nagaraju";
$conn= new mysqli($servername,$username,$password,$dbname);
if(!$conn)
{
    echo "connection failed";
}
else
{
    echo "connected";
    echo "<br><br>";
}
$sql="CREATE TABLE admin34(admin VARCHAR(10),password VARCHAR(10))";
if($conn->query($sql))
{
    echo "table created";
}
else
{
    echo "error" .$conn->error;
}
?>