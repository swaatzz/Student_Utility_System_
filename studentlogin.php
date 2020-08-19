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
$sql="select password from studentdata where username='$name'";
$query=mysql_query($sql,$conn);
$pass=mysql_fetch_array($query);
if($pass[0]===$password)
    $connect=true;
?>

<html>

<head>
    
    <title >
        
       Hii <?php echo $name ?>
    </title>
    
    <link rel="stylesheet" href="studentlogin.css" type="text/css">
    <link href="favicon.ico" type="image"  rel="icon">
    <style>th,td,tr{
    color:black;
    padding:10px;
}
        th{
            font-size:20px;
            font-family:yu gothic;
            color:#BA1AFF;
        }
        td{
            color:#0DFF0D;
            text-align: center;
        }
        #upperbody{
            background-image:url("board-73496.jpg");
            height:100%;
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
        if(!$connect)
        {
            echo '<center><b><h2 style="color:#001E00;padding-top:150px">OOPs ....    !!Wrong UserName or Password<br>PLEASE CHECK THE CREDENTIALS!!!</h2></b></center>';
        }
        else
        {
           $sql="select * from studentattendance where username='$name'";
           $query=mysql_query($sql,$conn);
            echo'<CENTER style="padding-top:60px">
           <table border=3px>
             <tr>
           
        <b ><th>SCHOLOR NO.</th>
          
           <th>SUBJECT</th>
           <th>PAST 7th DAY</th>
           <th>PAST 6th DAY</th>
           <th>PAST 5th DAY</th>
           <th>PAST 4th DAY</th>
           <th>PAST 3th DAY</th>
           <th>PAST 2th DAY</th>
           <th>PAST 1th DAY</th>
           <th>PERCENTAGE</th></b>
           </tr>
           ';
            while($pass=mysql_fetch_array($query))
            {
            $hun=1000;
            $flo=0.1;
            $flo= ($flo*$pass[9]);
           echo '
         
           <tr>
           <td> '.$pass[0].'</td>
           <td> '.$pass[11].'</td>
           <td> '.$pass[2].'</td>
           <td> '.$pass[3].'</td>
           <td> '.$pass[4].'</td>
           <td> '.$pass[5].'</td>
           <td> '.$pass[6].'</td>
           <td> '.$pass[7].'</td>
           <td> '.$pass[8].'</td>
           <td> '.($flo/$pass[10])*$hun.'%</td>
       
           </tr>'
           
           ;
        }echo'</table>
           
           
           </CENTER>
           '  ;  }
        
        
        ?>
        
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
