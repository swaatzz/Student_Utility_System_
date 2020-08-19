<?php
$servername = "localhost";
$username = "root";
$password = "khargosh";
$mydb="seproject";

// Create connection
$conn =mysql_connect($servername, $username, $password);
mysql_select_db('seproject');
 $name=$_POST['username'];
 $password=$_POST['password'];
$connect=false;
$sql="select password from admindetails where name='$name'";
$query=mysql_query($sql,$conn);
$pass=mysql_fetch_array($query);
if($pass[0]===$password)
    $connect=true;
?>

<html>

<head>
    
    <title >
        
       Hii Admin
    </title>
    
    <link rel="stylesheet" href="admin.css" type="text/css">
    <link href="favicon.ico" type="image"  rel="icon">
    </head>
    <body>
    <div id="upperbody">
    <div id="hea">
        <ul>
           
            <li id="home">  <a href="home.html">  Home  </a></li>
            <li id="ap">  <a href="attendence.html">  Attendence Panel  </a></li>
            <li id="tutorial">  <a href="tutorial.html">  Tutorials </a></li>
             <li id="admin">  <a href="admin.html">  Admin </a></li>
            
        </ul>
        
        
    </div>
        
    <div id="middle">
        <?php
        if(!$connect)
        {
            echo '<center><b><h2 style="color:#001E00;padding-top:150px">OOPs ....    !!Wrong UserName or Password<br>PLEASE CHECK THE CREDENTIALS!!!</h2></b></center>';
        }
        else
        {
            echo'
            <ul id="pass">
        <li style="width:25%;color:red;float:left;height:100%"></li>
        <li style="width:40%;color:green;float:left;height:100%">
            <ul>
            <li style="width:100%;height:30%"></li>
            <li id="login1"style="width:30%;background-color:rgba(0,0,0,0.5);color:white;float:left;height:20%;;border-radius:0px 10px 0px 10px"><a href="Uattendance.php" > <center><br>Update Attendance</center> </a></li>
            <li id="signup1" style="width:30%;float:right;background-color:rgba(0,0,0,0.5);color:white;height:20% ;;border-radius:0px 10px 0px 10px"><a href="Ututor.php " ><center> <br>Update Tutorials</center> </a></li>
            <li id="blank4"></li>
            </ul>
        </li>
        <li id="blank2" style="width:35%;float:left;height:100%"></li>
		
        </ul>
            
            
            
            
            
            ';
        }
        
        
        ?>
        
        </div>
        </div>
            
            
            
          
    </div>
        
        <div id="footer">
              <div id="fleft" style="font-family:yu gothic;font-size:13px">
            <center><p style="color:white;font-size:20px;font-family:segoe ui"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOUNDER</p>
                <ul id="flefty">
                    <li>Swati Kumari Singh</li>
                </ul>
                  
                  </center>
            </div>
            <div id="fright">
                <span id="frighty" style="font-family:segoe ui;color:white;font-size:15px"> &copy;2017 SUS. Inc. All Rights Reserved</span>
            
            </div>
        </div>
    </body>
</html>
