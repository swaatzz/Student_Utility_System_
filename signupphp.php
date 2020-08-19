<?php
$name=$_POST['Name'];
$schno=$_POST['SchNo'];
$gen=$_POST['gender'];
$un=$_POST['UserName'];
$pass=$_POST['Pass'];
$servername = "localhost";
$username = "root";
$password = "khargosh";
$mydb="seproject";
$connect=1;
$chk=1;
$conn =mysql_connect($servername, $username, $password);
mysql_select_db('seproject');
if(empty($name) || empty($schno) || empty($gen) || empty($un) || empty($pass))
    $connect=0;
if($connect==1){    
    $sql_check="select schno from studentdata";
    $query=mysql_query($sql_check,$conn);
    while($sch_details=mysql_fetch_array($query)){
        if($sch_details[0]==$schno){
            $chk=0;
            break;
        }
    }
    if($chk==1){
$sql = "INSERT INTO studentdata (name,schno,sex,username,password)
VALUES ('$name', '$schno', '$gen','$un','$pass')";
mysql_query($sql,$conn);
}
}
   ?>
<html>

<head>
    
    <title >
        
        SUS SignUp Panel
    </title>
    
    <link rel="stylesheet" href="signup.css" type="text/css">
    <link href="favicon.ico" type="image"  rel="icon">
    <style>
        #upperbody{
            background-image:url("apple-256263.jpg");
            background-size:100% 115%;
        }
    </style>
    </head>
    
    <body>
    <div id="upperbody" >
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
     if($connect){
         if($chk)
         echo'<center><h2 id="middle"style="padding-top:50px;color:#E8DA57" > YOUR RECORDS HAVE BEEN SUBMITTED SUCCESSFULLY !!</h2></center>
        </div>';
     else
         echo'<center><h2 id="middle"style="padding-top:50px;color:#E8DA57" > The Entered Scholar Number has already been used. Please Signup with a different Scholar Number</h2></center>
        </div>';
     }
        else{
         echo'<center><h2 id="middle"style="padding-top:50px;color:#E8DA57" >Data Not Submitted. Please Fill in all the fields...!!!</h2></center>
        </div>';
        }
            
    ?>        
          
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
                <span id="frighty" style="font-family:segoe ui;color:white"> &copy;2017 SUS. Inc. All Rights Reserved</span>
            
            </div>
        </div>
    </body>
</html>
