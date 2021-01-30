<html>
 <head>
   <title>certificates view</title>   
 </head>
    <?php
      session_start();
    if($_SESSION['stud'])
    {
        $user=$_SESSION['stud'];
    }
    else
    {
     print "<script>window.location.assign('studenthome.php')</script>"; 
    }
    ?>
    <body>
      <ol>
     <?php
     $db=new PDO("mysql:host=localhost;dbname=nagaraju","root","");
    $stat=$db->prepare("SELECT * FROM raju7 WHERE username='$user'");
    $stat->execute();
        while($row= $stat->fetch())
        {
           
            echo "<li><a target='_blank' href='viewcertificate.php?id=".$row['id']."'>" .$row['filename']."</a></li>";
           
        }
        ?>
    </ol><br>
        <div class="box40">
    <a href="studentviewprofile.php" ><button class="link">back</button></a>
            </div>
    </body>
    <style>
        .box40{
            width: 150px;
            margin: 5px auto;
        }
        .link{
            background: green;
            color: #fff;
            text-transform: capitalize;
            padding: 10px;
            width: 100px;
            cursor: pointer;
            font-size: 18px;
        }
        ol{
            padding-left: 100px;
            padding-top: 40px;
            padding-bottom: 40px;
            width: 500px;
            border: 1px solid #333;
            margin: 40px auto;
        }
        ol li
        {
            line-height: 35px;
        }
    </style>
</html>