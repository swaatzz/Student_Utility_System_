<?php
$servername = "localhost";
$username = "root";
$password = "khargosh";
$mydb="seproject";

// Create connection
$conn =mysql_connect($servername, $username, $password);
mysql_select_db('seproject');
 $date=$_POST['date'];
 $period=$_POST['period'];
 $Vlink=$_POST['Vlink'];
 $Blink=$_POST['Blink'];
 $connect=1;
     if(empty($date) ||  empty($period) || empty($Vlink) || empty($Blink))
        $connect=0;
if($connect===1){
 $sql="insert into lecturedetails values ('$date','$period','$Vlink','$Blink') ";
 $query=mysql_query($sql,$conn);
}
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
        <form action="ututorsub.php" method="post">     
            
                <center>
                    <legend><h1>Entry Details</h1></legend> <br/>
                </center>


                <center>
                    
                
                    <span style="color:brown;
                    font-size:20px;"><b>Date of Submission &nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></span><input type="date" name="date" id="password" min="1979-12-31" max="2017-04-02"><br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                                    <span id="span3" style="color:brown;
                    font-size:20px;"><b>Period&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;

                                          :&nbsp;&nbsp;&nbsp;&nbsp;</b></span><input type="number" max=6 name="period" id="password" min="1" max="6"><br/><br/><br/><span style="color:brown;
                    font-size:20px;"><b>Enter Video Link : </b></span><input type="url"  name="Vlink"  id="uname"><br/><br/><br/>
                                    <span id="span4" style="color:brown;
                    font-size:20px;"><b>Enter Referral book Link : </b></span><input type="url"  name="Blink"  id="u1name"><br/><br/><br/>

                <input type="submit" name="submit" id="submit">
                </center>
               
            </form>   
        </div>
        <div id="submittutor" style="padding:50px">
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
