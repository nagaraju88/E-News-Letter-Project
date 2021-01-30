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
                  <li><a href="eeedep.html">Home</a></li>
                  
              <li><a class="active" href="eee%20placements.php">Placements</a></li>   
                  
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
$count=1;
$year3=$_POST["year"];
      $branch="eee";
     
     ?>
        
        <br><br><h1>Placement Activities</h1><br><br>
        <?php
    $count=1;
$con=mysqli_connect("localhost","root","","placementcell");
$sql="select * from placementtable where branch='$branch' and year like '%$year3%' or username like '%$year3%'";
$result=$con->query($sql);
if($result->num_rows>0)
{
    echo "<table border='8'>
           <tr>
           <th>S.NO</th>
           <th>User Name</th>
           <th>Year</th>
           <th>NO of companies got selected</th>
           <th>Company Name</th>
           </tr>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td class='raju'>";
        echo $row["id"];
        echo "</td>";
        echo "<td>";
        echo $row["username"];
        echo "</td>";
        echo "<td>";
        echo $row["year"];
        echo "</td>"; 
        echo "<td>";
        echo $row["noofplacem"];
        echo "</td>";
        echo "<td>";
        echo $row["companyname"];
        echo "</td>";
        echo "</tr>";
        $count++;
    }
    echo "</table>";
}
     else
     {
         echo "<tr><td>";
         echo "<h4>No records found</h4>";
         echo "</td></tr>";
     }
     
    
    }
?>
        
        
        
 <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" >
     <label>Enter date format : </label>
     <input type="text" name="year" autofocus placeholder="YYYY-MM-DD ( or ) YYYY" required><br><br>
     <input type="submit" value="search">
     
        </form>
    </body>
    <style>
        h4{
            text-align: center;
        }
        label{
            margin-right: 10px;
        }
        h1{
            text-align: center;
        }
        form{
            width: 400px;
            border: 1px solid #333;
            margin: 130px auto;
            text-align: center;
            padding: 20px;
        }
        input[type="text"]
        {
            width: 250px;
            height: 25px;
            padding: 20px;
            font-size: 16px;
            text-align: center;
            margin-right: 10px;
        }
        input[type="submit"]
        {
            width: 90px;
            height: 30px;
            background: green;
            color: #fff;
            border: 5px solid #333;
            text-transform: uppercase;
            cursor: pointer;
        }
       table
        {
            width: 1000px;
            margin: 30px auto;
        }
        tr th,td{
            padding: 10px 30px;
        }
    </style>
</html>