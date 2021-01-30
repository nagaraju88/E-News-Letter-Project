<?php
$con=mysqli_connect("localhost","root","","nagaraju");
$sql="select * from raju7";
$result=$con->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo $row['mail']."<br><br>";
    }
}
?>