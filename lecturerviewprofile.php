<?php ob_start(); ?> 
<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home page</title>  
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  
  
    <style>
         *{
            margin:0px;
            padding: 0px;
        }
       
        header{
            position: relative;
            max-width: 1100px;
            background: #a7a7a7;
            margin: 15px auto;
            align-content: center;
        }
        .logo{
            position: relative;
            text-decoration: none;
            font-size: 16px;
            text-transform: capitalize;
            padding: 14px 15px;
            color: #fff;
            font-weight: 600;
            float:left;
        }
        nav{
            float: right;
        }
        nav ul{
            display: flex;
        }
        nav ul li{
            list-style: none;
        }
        nav ul li a{
            position:relative;
            display: block;
            text-transform: capitalize;
            text-decoration:none;
            font-size: 14px;
            line-height: 19px;
            transition:0.1s;
            color: #fff;
            border-left: 1px solid #fff;
            font-weight: 600;
            padding: 16px 13px;
        }
        nav ul li a:hover{
            background: #000;
            color:#fff;
        }
        nav ul li .active{
            background: #000;
        }
        .clear{
            clear: both;
        }
        @media(max-width:800px){
            .toggle{
                width: 30px;
                height: 30px;
                display:block;
                float:right;
                margin:10px;
                cursor: pointer;
            }
            .toggle:before{
                content: "\f0c9";
                font-family:fontAwesome;
                font-size: 24px;
                text-align: center;
                padding: 0px 5px;
                line-height: 30px;
            }
            nav{
                display: none;
            }
            nav.active{
                width:100%;
                display:block;
            }
            nav ul{
                display:block;
            }
            nav.active ul li
            {
                text-align: center;
                width:100%;
                opacity: 1;
            }
            nav ul li.active ul{
                position: relative;
                opacity: 1;
            }
        }
    </style>
      </head>
    <?php
     session_start();
		if($_SESSION['lect'])
		{
             $user=$_SESSION['lect'];
          
        }
		else
		{
			header("Location:http://localhost/major/lecturerhome.php");
		}
        $user=$_SESSION['lect'];
    ?>
  
    
    <body>
     <header>
           <a href="#" class="logo">E- News letter</a>
           <div class="toggle"></div>
           <nav>
              <ul>
                 <li><a href="lecturerviewprofile.php">Home</a></li>
                  <li><a class="active" href="lecturerviewprofile.php">View Profile</a></li>
                  <li><a href="updatelecturerprofile.php">Update Profile</a></li>
                  <li><a href="logout2.php">LogOut</a></li>
               </ul>
           </nav>
           <div class="clear"></div>
        </header>
        <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('.toggle').click(function(){
                $('.toggle').toggleClass('active')
                $('nav').toggleClass('active')
            })
            
        })      
        </script>
        
         <article>
    <section>
<?php 
        
       $lecturer=$_SESSION['lect'];
        $lpass=$_SESSION["pass"];
        
$servername="localhost";
$username="root";
$password="";
$dbname="swaraj";
$raj=new mysqli($servername,$username,$password,$dbname);
$sql="SELECT image,month,username,password,designation,qualification,email,telnumber,workexperience,specialization,subjectstaug FROM harshini34 WHERE username='$lecturer' and password= '$lpass' ";
$result=$raj->query($sql);
    if($result){

        if($result->num_rows>0)
{
    
    while($row=$result->fetch_assoc())
    {
        $_SESSION["branch"]=$row["specialization"];
       echo  "<div class='main'>";
        
        echo "<div class='size'>";
    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="405" width="290"/>';
    echo "</div>";
        
         echo "<section>";
        echo "<article class='details'>"."<br>";
        echo "Year of Joining : " .$row["month"] ."<br><br>";
        echo "User Name : " .$row["username"] ."<br><br>";
        echo "Designation : " .$row["designation"] ."<br><br>";
        echo "E-mail Id : " .$row["email"] ."<br><br>";
        echo "Contact NO : " .$row["telnumber"] ."<br><br>";
        echo "Experience : " .$row["workexperience"] ."<br><br>";
        echo "Specialization : " .$row["specialization"] ."<br><br>";
       echo "Subjects Taught: " .$row["subjectstaug"] ."<br><br>";
       
        echo "</article>" ."<br><br>";
        
        echo "<div class='line'></div>" ."<br>";
       
        echo "<a href='addlecturercert.php'><button class='box'>add certificates</button></a>";
        echo "<a href='lecturerviewcertificates.php'><button class='box'>view certificates</button></a>";
       
        echo "</section>" ."<br><br>" ;
       
        echo "</div>"."<br><br>";
       
    }
            ob_end_flush();
}
            }
        else{
            echo "not matched";
        }
       
?> 
        </section>
        </article>
       
</body>
<style>
    .box
    {
        padding: 10px;
        background: green;
        color: #fff;
        margin-left: -40px;
        text-transform: capitalize;
        cursor: pointer;
    }
      section a{
           
            margin-left: 185px;
      
        }
        .cert img{
            margin-left: 120px;
            text-align: center;
        }
    .size{
            float: left;
           border: 1px solid #333;
            margin-right: 50px;
        }
        
        .main{
            width: 710px;
            margin: 50px auto;
            
        }
        .details{
            height: 405px;
            font-size: 19px;
             border: 1px solid #333;
        }
</style>
</html>