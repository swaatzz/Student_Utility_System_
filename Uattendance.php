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
