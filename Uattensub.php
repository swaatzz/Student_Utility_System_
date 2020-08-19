<?php
    $servername = "localhost";
    $username = "root";
    $password = "khargosh";
    $mydb="seproject";
    
    // Create connection
    $conn =mysql_connect($servername, $username, $password);
    mysql_select_db('seproject');
     $schno=$_POST['SchNo'];
     $subject=$_POST['subject'];
     $sub=$_POST['submission'];
     $connect=1;
     if(empty($schno) ||  empty($subject) || empty($sub))
        $connect=0;
    if($connect===1){
     $sql="select * from studentattendance where schno='$schno' and subject='$subject'";    
     $query=mysql_query($sql,$conn);
     if($query){
       
         $row=mysql_fetch_array($query);
         $sql1="update studentattendance set last7='$row[3]' where schno='$schno' and subject='$subject'";
         $sql2="update studentattendance set last6='$row[4]' where schno='$schno' and subject='$subject'";
         $sql3="update studentattendance set last5='$row[5]' where schno='$schno' and subject='$subject'";
         $sql4="update studentattendance set last4='$row[6]' where schno='$schno' and subject='$subject'";
         $sql5="update studentattendance set last3='$row[7]' where schno='$schno' and subject='$subject'";
         $sql6="update studentattendance set last2='$row[8]' where schno='$schno' and subject='$subject'";
         $sql7="update studentattendance set last1='$sub' where schno='$schno' and subject='$subject'";
         if($sub=='P')
         {
             $row[9]=$row[9]+1;
             $sql8="update studentattendance set numberofpresence='$row[9]' where schno='$schno' and subject='$subject'";
             mysql_query($sql8);
         }
         $row[10]=$row[10]+1;
         $sql9="update studentattendance set totalclass='$row[10]' where schno='$schno' and subject='$subject'";
         mysql_query($sql1);
         mysql_query($sql2);
         mysql_query($sql3);
         mysql_query($sql4);
         mysql_query($sql5);
         mysql_query($sql6);
         mysql_query($sql7);
         mysql_query($sql9);        
         
     }}
         
?>

<html>

<head>
    
    <title >
        
        SUS Admin Domain
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
        <div style="width:20%;color:red;float:left;height:100%"></div>
        <div style="float:left" >
        <form action="Uattensub.php" method="post">     
            
                <center>
                    <legend><h1>Entry  Details</h1></legend> <br/>
                </center>


                <center>
                    <span id="span1"><b>Student's Scholar Number : </b></span><input type="Number"  name="SchNo"  id="uname" min="151110000" max="151119999"><br/><br/><br/>
                
                    &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                    <span id="span3" style="color:cyan;
    font-size:20px;"><b>Subject&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
                        
                          :&nbsp;&nbsp;&nbsp;&nbsp;</b></span><input type="text" max=6 name="subject" id="password"><br/><br/><br/>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span style="color:cyan; font-size:20px;">Attendance Status : </span><input type="text" name="submission"style ="border-radius:0px 10px 0px 10px" > <br/><br/><br/>
                    
                <input type="submit" name="submit" id="submit" >
                </center>
               
            </form>   
        </div>
        <div style="height:80%;width:30%;float:left;padding-top:50px">
            <?php
    
            if($connect){
            echo '<b style="margin-top:40px;color:brown ;background-color:rgba(0,0,0,0.3);padding:15px 10px ;border-radius:10px">
                YOUR DATA HAS BEEN SUBMITTED...!!!</b>';
            }
            else {
                echo '<b style="margin-top:40px;color:brown ;background-color:rgba(0,0,0,0.3);padding:15px 10px ;border-radius:10px">
                Please Completely fill in all the required fields.....!!!</b>';
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
