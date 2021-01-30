<html>
    <head>
    <title>complete certificate view</title>
    </head>
    <?php
    session_start();
    if($_SESSION['stud'])
    {
        $user=$_SESSION['stud'];
    }
    else
    {
        Print "<script>window.location.assign('studenthome.php')</script>";
    }
    ?>
    <body>
<?php
$con=mysqli_connect("localhost","root","","nagaraju");
$sql="SELECT * FROM raju5 WHERE username='$user'";
$result=$con->query($sql);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                header('content-type:' .$row['ftype']);
                echo $row['fdata'];
            }
        }
?>
    </body>
</html>