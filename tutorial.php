<?php 


$servername = "localhost";
$username = "root";
$password = "khargosh";
$mydb="seproject";

// Create connection
$conn =mysql_connect($servername, $username, $password);
mysql_select_db('seproject');
 $dates=$_POST['bday'];
 $periods=$_POST['pod'];
$val=1;
if(empty($dates) or empty($periods))
{
   $val=0;
}
?>


<html>

<head>
    
    <title >
        
        SUS TUTORIALS RESULT
    </title>
    
    <link rel="stylesheet" href="tutorialcss.css" type="text/css">
    <link href="favicon.ico" type="image"  rel="icon">
    <style>th,td,tr{
    padding:10px;
}
        th{
            font-size:20px;
            font-family:yu gothic;
            color:white;
        }
        td{
            color:white; 
            text-align: center;
        }
        #upperbody{
            background-image:url("board-73496.jpg");
            height:100%;
        }
        #uppertable
        {
            overflow: auto;
            height:80%;
            width:20%;
            float:left;
            margin-left:300px;
            margin-top:40px;
        }
        #lowertable
        {
            overflow: auto;
            height:80%;
            width:25%;
            float:left;
            margin-left:150px;
        }
		caption{
			color:yellow;
			font-size:20;
			font-family:yu gothic;
		}
        #tutorlink1,#tutorlink2{
            text-decoration: none;
            font-family:yu gothic;
            text-align: center;
            color:#E80C7A;
            
        }
        #upperbody{
            border-radius:0px 0px 7px 7px;
        }
    </style>
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
        if($val==0)
            echo '
            
            <center><p style=" font-family:yu gothic;font-size:30px;color:white;background-color:rgba(0,0,0,0.5);padding-top:100px">Please Enter a Valid Date or period in Order to fetch correct results</p>         </center>
            ';
        else{
			echo ' 
            <div id="uppertable">
			<table border=3px style="height:100px;overflow:scroll">
				<caption>Suggested Links for Tutorial Videos.&nbsp;&nbsp;&nbsp;&nbsp;</caption>
				<tr>
				<th>Sr. No.</th>
				<th>Video Links</th>
				</tr>';
			$sql="select Vlink from lecturedetails	where date='$dates' and period='$periods'";
			$query=mysql_query($sql);
			$i=1;
			while($rowdetails =mysql_fetch_array($query)){
				echo'
				<tr>
					<td>'.$i.'</td><td><a href="'.$rowdetails[0].'"id="tutorlink1">Link '.$i.'</a></td>
				</tr>';
				$i++;
			}
			echo '</table></div > <br><br>
            <div id="lowertable">
			<table border=3px>
				<caption>Suggested Links for Referred Books.&nbsp;&nbsp;&nbsp;&nbsp;Study well ...!!!</caption>
				<tr>
				<th>Sr. No.</th>
				<th>Referral Book Links</th>
				</tr>';
			$sql="select Blink from lecturedetails	where date='$dates' and period='$periods'";
			$query=mysql_query($sql);
			$i=1;
			while($rowdetails=mysql_fetch_array($query)){
				echo'
				<tr>
					<td>'.$i.'</td><td><a href="'.$rowdetails[0].'"id="tutorlink1">Link '.$i.'</a></td>
				</tr>';
				$i++;
			}
			echo '</table></div>';
			}
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
                <span id="frighty" style="font-family:segoe ui;color:white"> &copy;2017 SUS. Inc. All Rights Reserved</span>
            
            </div>
        </div>
    </body>
</html>
