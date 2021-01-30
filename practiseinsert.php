<?php
$servername="localhost";
$username="root";
$password="";
$dbname="nagaraju";
$conn=new mysqli($servername,$username,$password,$dbname);
if(!$conn)
{
    echo "connection failed";
}
else
{
    echo "connected";
    echo "<br><br>";
}
$sql="INSERT INTO admin34(admin,password) VALUES('admin','12345678')";
if($conn->query($sql))
{
    echo "data inserted";
}
else
{
    echo "error" .$conn->error;
}
?>