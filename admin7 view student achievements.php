<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>student achievements</title>  
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  
  </head>
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
            font-size: 18px;
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
            font-size: 16px;
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
<body>
    <header>
    <a href="#" class="logo">E- News letter</a>
    <div class="toggle"></div>
    <nav>
      <ul>
     <li><a href="admin1.php">Home</a></li>
     <li><a href="admin2%20teacher.php">Teacher Achievements</a></li>
     <li><a class="active" href="admin6%20student.php">Student Achievements</a></li>
     <li><a href="logout.php">LogOut</a></li>
      </ul>
    </nav>
    <div class="clear"></div>
</header><br><br>
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
    
   
<?php
    
		session_start();
		if($_SESSION['admin'])
		{
            
        }
		else
		{
			header("Location:http://localhost/major/practise1.php");
		}
		$user=$_SESSION['admin'];
		
    
    
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $date=$_POST["studid"];
        $uname=$_POST["usrname"];
$servername="localhost";
$username="root";
$password="";
$dbname="nagaraju";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="SELECT image,month,hallticket,studentname,qualification,email,telnumber,specialization,eventname FROM harshini3410 WHERE hallticket like '%$date%' AND studentname='$uname'";
$result=$conn->query($sql);
        if($result){
if($result->num_rows>0)
{
    
    while($row=$result->fetch_assoc())
    {
       echo  "<div class='main'>";
        
        echo "<div class='size'>";
    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="375" width="290"/>';
    echo "</div>";
        
         echo "<section>";
        echo "<article class='details'>"."<br>";
        echo "Year of Joining : " .$row["month"] ."<br><br>";
        echo "Student ID : " .$row["hallticket"] ."<br><br>";
        echo "User Name : " .$row["studentname"] ."<br><br>";
        echo "Qualification : " .$row["qualification"] ."<br><br>";
        echo "E-mail Id : " .$row["email"] ."<br><br>";
        echo "Contact NO : " .$row["telnumber"] ."<br><br>";
        echo "Specialization : " .$row["specialization"] ."<br><br>";
       echo " Event Name: " .$row["eventname"] ."<br><br>";
        echo "</article>";
        echo "</section>" ."<br><br>" ;
         
        echo "</div>"."<br><br>";
    
    }
}
            }
        else
        {
            echo "username/date not found";
        }
}
    
?>
    

<div class="designs">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" >
   <label>Student ID :</label>
    <input type="text" autofocus class="studid" name="studid" placeholder="Enter year of joining"><br><br>
    <label>Username :</label>
    <input type="text" name="usrname" placeholder="User Name"><br><br>
    <input type="submit" value="Search">
</form>
</div>
    <section class="text">
        <article class="body">
            <a class="links" href="admin5%20add%20student%20achievements.php">Add Student Achievements</a><br><br>
        </article>
</section> 
       
</body>
    <style>
        .studid{
            margin-left: 60px;
            width: 200px;
            height: 30px;
            text-align: center;
            text-transform: uppercase;
        }
        img
        {
            width: 300px;
            height: 365px;
        }
        .body{
           
            width: 300px;
        }
        .text{
            width: 250px;
            margin: 100px auto;
        }
        .designs{
            text-align: center;
            margin: 50px auto;
            border: 1px solid #333;
            padding: 45px 15px;
            width: 600px;
        }
        input[type="month"]{
            margin-left: 20px;
            width: 200px;
            height: 30px;
        }
        label{
            margin-left: 20px;
            font-size: 20px;
        }
        input[type="text"]{
            margin-left: 60px;
            width: 200px;
            height: 30px;
            text-align: center;
        }
        input[type="submit"]{
            margin-left: 160px;
            width: 80px;
            height: 30px;
        }
          .links{
            color: #fff;
             
             padding: 20px;
              background: green;
            font-size: 18px;
        }
        .raju{
            margin: 30px 650px;
        }
    .size{
            float: left;
            border-right: 1px solid #333;
            margin-right: 50px;
        }
        
        .main{
            margin-left: 400px;
            width: 710px;
            margin: 10px auto;
            border: 1px solid #333;
        }
        .details{
            font-size: 19px;
        }
</style>
</html>