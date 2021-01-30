<?php ob_start(); ?>
<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home page</title>  
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
            font-size: 14px;
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
           list-style: none;
        }
        nav ul li{
            position: relative;
            float: left;
        }
        nav ul li a{
            position:relative;
            display: block;
            text-transform: capitalize;
            text-decoration:none;
            font-size: 14px;
            line-height: 17px;
            transition:0.1s;
            color: #fff;
            border-left: 1px solid #fff;
            font-weight: 600;
            padding: 16px 10px;
        }
        nav ul li a:hover{
            background: #000;
            color:#fff;
        }
        nav ul li .active{
            background: #000;
        }
        nav ul li ul{
            position: absolute;
            left: 0;
            top: 102%;
            background: #a7a7a7;
            display: none;
        }
        nav ul li ul li{
            width: 150px;
            border-bottom: 1px dotted #fff;
            position: relative;
        }
       
        nav ul li:hover > ul{
            display: block;
            color: #fff;
        }
        nav ul ul ul{
            top: 0;
            left: 100%;
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
     <li><a class="active" href="index.php">Home</a></li>
        <li><a href="achievements.php">Achievements</a></li>
                  
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
          
      
    
  
<?php
        session_start();
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
      
      $servername="localhost";
      $username="root";
      $password="";
      $dbname="nagaraju";
      $conn=new mysqli($servername,$username,$password,$dbname);
      $sql="SELECT studentname,password FROM harshini3410";
      $result=$conn->query($sql);
      if($result->num_rows>0)
      {
          while($row=$result->fetch_assoc())
          {
            $name=$_POST["uname"];
            $psw=$_POST["password"];  
    if(($row["studentname"]== $name) && ($row["password"]==$psw))
            {  
        $_SESSION['stud']=$name;
        $_SESSION['passw']=$psw;
header("Location:http://localhost/major/studentviewprofile.php",true,301); 
        
            }
              
          }
      }
  }
?>
        <fieldset>
        <legend><img src="download.jpg"></legend>  
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"><br>
<label>Student Name :</label>
    <input type="text" autofocus name="uname" placeholder="Student Name"><br><br>
<label>Password :</label>
    <input type="password" name="password" id="myInput" placeholder="Student Password"><br><br>
    <input type="checkbox" onclick="myFunction()">show password<br><br>
    <input type="submit" value="Login"><br><br>
<div class="arj1">Don't have account?<a href="studentsignup.php" class="arj">signup</a></div>
    <a href="studentforgetpass.php" class="arj2">forgotten password?</a>
</form>                  
        </fieldset>
         <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
      <script type="text/javascript">
          function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
      
        </script> 
</body>
    <style>
        #myInput{
            width: 250px;
            height: 32px;
            margin-left: 60px;
        }
        .arj2{
            text-decoration: none;
            margin-left: 60px;
        }
         .arj1{
             float: left;
             margin-left: 40px;
            text-decoration: none;
            color: #333;
        }
       fieldset
        {
            width: 600px;
            margin: 60px auto;
            text-align: center;
            padding: 20px;
            font-size: 18px;
        }
        input[type="text"]
        {
            width: 250px;
            height: 32px;
            text-align: center;
            margin-left: 25px;  
        }
        input[type="password"]
        {
            width: 250px;
            height: 32px;
            text-align: center;
            margin-left: 55px;
        }
        input[type="submit"]
        {
            width: 68px;
            height: 40px;
            font-size: 18px;
        }
        form{
            width: 500px;
        }
        legend img
        {
            width: 200px;
            border-radius: 50%;
        }
    </style>
</html>