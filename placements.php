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
            max-width: 1200px;
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
            font-size: 15px;
            line-height: 19px;
            transition:0.1s;
            color: #fff;
            border-left: 1px solid #fff;
            font-weight: 500;
            padding: 16px 13px;
        }
        nav ul li a:hover{
            background: #000;
            color:#fff;
        }
        nav ul li a.active{
            background: #333;
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
		if($_SESSION['admin'])
		{
            
        }
		else
		{
			header("Location:http://localhost/major/practise1.php");
		}
		$user=$_SESSION['admin'];
		?>
<body>
    
<header>
    <a href="#" class="logo">E-News Letter</a>
    <div class="toggle"></div>
    <nav>
      <ul>
     <li><a href="admin1.php">Home</a></li>
     <li><a href="admin2%20teacher.php">Teacher Achievements</a></li>
     <li><a href="admin6%20student.php">Student Achievements</a></li>
          <li><a class="active" href="placements.php">placement cell</a></li>
     <li><a href="logout.php">LogOut</a></li>
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
    $con=mysqli_connect("localhost","root","","placementcell");
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $user=$_POST["usern"];
        $branch=$_POST["branch"];
        $year=$_POST["date"];
        $placemen=$_POST["placem"];
        $company=$_POST["companyn"];
    
        $sql="insert into placementtable(username,branch,year,noofplacem,companyname) values('$user','$branch','$year','$placemen','$company')";
        
        if($con->query($sql))
        {
            echo "<script>window.location.assign('placements.php');</script>";
        }
        else
        {
            echo "<script>window.alert('enter details correctly');</script>";
        }
        
    }
          
   
    ?>
    
       <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
           <label>user name :</label>
           <input type="text" name="usern" placeholder="user name" class="text1"><br><br>
           <label class="bran">branch :</label>
        <select name="branch"  required>
            <option >select an option</option>
        <option value="cse">cse</option>
        <option value="ece">ece</option>
        <option value="eee">eee</option>
            <option value="mech">mech</option>
            <option value="civil">civil</option>
        </select><br><br>
           <label>year :</label>
           <input type="date" name="date" placeholder="select date"><br><br>
           <label>no of placements got :</label>
           <input type="number" name="placem" placeholder="enter no of placements got selected"><br><br>
           <label>company name :</label>
           <input type="text" name="companyn" placeholder="enter company name" class="text2"><br><br>
           <input type="submit" value="submit">
        </form>
    </body>
    <style>
        select{
            width: 230px;
            height: 37px;
            margin-left: 55px;
            text-align-last: right;
            padding-right: 86px;
            direction: rtl;
        }
        .bran{
            margin-right: 54px;
        }
        *{
            margin: 0px;
            padding: 0px;
        }
        form{
            width: 500px;
            border: 1px solid #333;
            margin: 80px auto;
            padding: 25px;
        }
        label
        {
            text-transform: capitalize;
            margin-left: 25px;
            margin-right: 10px;
        }
        .text1
        {
            margin-left: 74px;
            width: 250px;
            height: 30px;
            text-transform: capitalize;
            text-align: center;
        }
        .text2
        {
            margin-left: 40px;
            width: 250px;
            height: 30px;
            text-transform: uppercase;
            text-align: center;
        }
        .text3
        {
            margin-left: 40px;
            width: 250px;
            height: 30px;
            text-transform: uppercase;
            text-align: center;
        }
        input[type="date"]
        {
            width: 250px;
            height: 30px;
            text-align: center;
            margin-left: 115px;
        }
        input[type="number"]
        {
            width: 250px;
            height: 30px;
            text-align: center;
        }
        input[type="submit"]
        {
            width: 75px;
            height: 30px;
            text-align: center;
            background: green;
            color: #fff;
            font-weight: 600;
            font-size: 18px;
            padding: 2px;
            border: 3px solid #333;
            cursor: pointer;
            margin: 10px 210px;
        }
    </style>
</html>