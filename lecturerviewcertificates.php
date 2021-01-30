<html>
 <head>
   <title>certificates view</title>   
 </head>
    <?php
      session_start();
    if($_SESSION['lect'])
    {
        $user=$_SESSION['lect'];
    }
    else
    {
     print "<script>window.location.assign('lecturerhome.php')</script>"; 
    }
    ?>
    <body>
      <ol>
     <?php
     $db=new PDO("mysql:host=localhost;dbname=swaraj","root","");
    $stat=$db->prepare("SELECT * FROM raju7 WHERE username='$user'");
    $stat->execute();
        while($row= $stat->fetch())
        {
           
            echo "<li><a target='_blank' href='viewlecturercert.php?id=".$row['id']."'>" .$row['filename']."</a></li>";
           
        }
        ?>
          
    </ol><br>
        <div class="box40">
    <a href="lecturerviewprofile.php" ><button class="link">back</button></a>
          </div>
    </body>
    <style>
        .box40{
            width: 100px;
            margin: 10px auto;
        }
        .link{
            background: green;
            color: #fff;
            text-transform: capitalize;
            padding: 10px;
            width: 100px;
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