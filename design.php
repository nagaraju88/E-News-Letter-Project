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
            max-width: 1600px;
            background: #a7a7a7;
            margin: 15px 160px;
            align-content: center;
        }
        .logo{
            position: relative;
            text-decoration: none;
            font-size: 20px;
            text-transform: uppercase;
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
            text-transform: uppercase;
            text-decoration:none;
            font-size: 19px;
            line-height: 19px;
            transition:0.1s;
            color: #fff;
            font-weight: 600;
            padding: 16.3px 13px;
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
           <a href="#" class="logo">My College Year book</a>
           <div class="toggle"></div>
           <nav>
              <ul>
                 <li><a class="active" href="home.html">Home</a></li>
                  <li><a href="login.php">Login</a></li>
                  <li><a href="register.php">Register</a></li>
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
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$date=$_POST["year"];
$uname=$_POST["usrname"];
$servername="localhost";
$username="root";
$password="";
$dbname="swaraj";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="SELECT * FROM harshini34 WHERE month='$date'";
if($conn->query($sql))
{
    header("Location:http://localhost/major/admin4 view teacher achievements.php");
}
    else{
        echo "error" .$conn->error;
    }
}
?>
<section>

<div class="designs">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" >
   <label>Year of Joining :</label>
    <input type="month" name="year"><br><br>
    <label>Username :</label>
    <input type="text" name="usrname" placeholder="User Name"><br><br>
    <input type="submit" value="Search">
</form>
</div>
</section>        

    </body>
    <style>
        section{
            margin: 200px 600px;
        }
        .designs{
            border: 1px solid #333;
            padding: 45px 15px;
            width: 400px;
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
            text-decoration: none;
            color: #000;
            font-size: 30px;
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
            border: 1px solid #333;
        }
        .details{
            font-size: 19px;
        }
</style>
</html>