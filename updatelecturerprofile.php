<?php ob_start(); ?>
<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home page</title>  
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  
       <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js">
      </script>
      <script type="text/javascript">
         $(function() {
            $( "#date" ).datepicker({dateFormat: 'yy'});
         });
      </script>
  
    <style>
         *{
            margin:0px;
            padding: 0px;
             
        }
        body{
            
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
            margin-left: 20px;
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
            border-left: 1px solid #fff;
            transition:0.1s;
            color: #fff;
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
                  <li><a href="lecturerviewprofile.php">View Lecturer Profile</a></li>
                  <li><a class="active"  href="updatelecturerprofile.php">Update Lecturer Profile</a></li>
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
        
        
        
       <?php
       
        $lecturer=$_SESSION['lect'];
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {   
        
         $psw=test_input($_POST["pword"]);
        $q=test_input($_POST["qualific"]);
        $em=test_input($_POST["email"]);
        $dg=test_input($_POST["designat"]);
        if(!filter_var($em,FILTER_VALIDATE_EMAIL))
        {
            echo "enter correctly";
        }
        $c=$_POST["tel"];
        $we=$_POST["wexperien"];
        $s=$_POST["opt"];
        $st=$_POST["taught"];
        $mage=addslashes(file_get_contents($_FILES["filen"]["tmp_name"]));
       
        
            
$servername="localhost";
$username="root";
$password="";
$dbname="swaraj";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="UPDATE harshini34 SET image='$mage', password='$psw', designation='$dg', qualification='$q', email='$em', telnumber='$c', specialization='$s' WHERE username='$lecturer'";
if($conn->query($sql))
{
    $_SESSION["pass"]=$psw;
header("Location:http://localhost/major/lecturerviewprofile.php"); 
}
    }

    
    function test_input($data)
    {
        $data=stripslashes($data);
        $data=trim($data);
        return $data;
    }
    ?>
        <div id="main">
        <fieldset>
        <legend>Update Profile</legend>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" enctype="multipart/form-data">
        
        <label>Password</label>
        <input type="password" name="pword" placeholder="Password"><br><br>
        <label>designation:</label>
        <input type="text" name="designat" placeholder="designation"><br><br>
        <label>qualification:</label>
        <input type="text" name="qualific" placeholder="Qualification"><br><br>
        <label>e-mail id:</label>
        <input type="email" name="email" placeholder="email id"><br><br>
        <label>contact NO:</label>
        <input type="tel" name="tel" placeholder="contact number"><br><br>
        <label>workexperience:</label>
        <input type="text" name="wexperien" placeholder="work experience"><br><br>
        <label class="lft2">branch:</label>
        <select name="opt" >
            <option >select an option</option>
        <option value="cse">cse</option>
        <option value="ece">ece</option>
        <option value="eee">eee</option>
            <option value="mech">mech</option>
            <option value="civil">civil</option>
        </select><br><br>
        <label>subjects taught:</label>
        <input type="text" name="taught" placeholder="subjects taught"><br><br>
        
        <label>Image of you:</label>
        <input type="file" name="filen"><br><br>
        <input type="submit" value="update">
    </form>
      </fieldset>
            </div>
       
    </body>
    <style>
        .left1{
            margin-left: -80px;
        }
         .links{
            text-decoration: none;
            color: #000;
            font-size: 20px;
        }
        section{
            margin: 40px 600px;
        }
        .lft2{
            margin-right: 40px;
            margin-left: 20px;
        }
        .lft1{
            margin-left: -5px;
        }
        .rgt{
            margin-left: 30px;
            margin-right: 40px;
        }
        .lft{
            margin-left: 8px;
            margin-right: 20px;
        }
        .account{
            margin-left: 110px;
            font-size: 22px;
        }
       
        select{
            width: 230px;
            height: 37px;
            margin-left: 55px;
            text-align-last: right;
            padding-right: 86px;
            direction: rtl;
        }
        select .opt {
            font-size: 18px;
            text-align-last: center;
        }
        select .opt1{
            font-size: 19px;
        }
        #main{
            margin :60px auto;
        }
        fieldset{
         max-width: 700px;
         margin: auto;
            
        }
        label{
            margin-right: 25px;
            color:#000;
            font-size: 20px;
        }
        legend{
            color: #000;
            font-size: 20px;
            text-align: center;
        }
        form{
            padding: 10px;
            text-align: center;
        }
        .border{
            margin-left: 60px;
            max-width: 350px;
            border:1px solid #fff;
        }
        .border label{
            color:#fff;
            font-size: 
        }
        input[type="text"]{
            width : 230px;
            opacity : 0.7;
            height : 37px;
            font-weight: 600;
            text-align : center;
            margin-left: 20px;
        }
        input[type="month"]{
            width : 230px;
            opacity : 0.7;
            height : 37px;
            font-weight: 600;
            text-align : center;
            margin-left: -10px;
        }
        input[type="email"]{
            width : 230px;
            height: 34px;
            opacity: 0.7;
            text-align: center;
            margin-left: 45px;
        }
         input[type="password"]{
            width : 230px;
            height: 34px;
            opacity: 0.7;
            text-align: center;
            margin-left: 35px;
        }
        input[type="date"]{
            width:auto;
            opacity: 0.7;
            height: 30px;
            text-align: center;
        }
        input[type="tel"]{
            width : 230px;
            opacity: 0.7;
            height: 34px;
            text-align: center;
            margin-left: 35px;
        }
        input[type="submit"]{
            width : 90px;
            height: 35px;
            cursor: pointer;
            font-weight: 600;
            font-size: 18px;
            text-align: center;
            text-transform: uppercase;
        }
        .left{
            margin-left: 65px;
        }
        .right{
            margin-left: 0px;
        }
      
    </style>
</html>