<!DOCTYPE html>
<html>
<head lang="en" xmlns="http://www.w3.org/1999/xhtml"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>HIRE ME- ADMIN</title>
    <link rel="stylesheet" type="text/css" href="Style/myskills.css">
</head>
<body>

    <header>

        <nav>
            <h1 align="left">GOKULRAJ JAYAKUMAR</h1>
            <div class="topnav-right">
                 <a href="HomePage.html" class="active">HOME</a>
                <a href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/Skill1.php">MY SKILLS</a>
                <a href="recommendation.html">RECOMMENDATION</a>
                <a href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/works1.php">WORKS</a>
                <a href="http://gokulrajjayakumar.uta.cloud/GokuBlog/">BLOG</a>
                <a href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/hireme1.php">HIRE ME</a>
                <a href="SignUp.html">SIGN UP</a>
            </div>
        </nav>

    </header>
    <H2 style="text-align:left;">HIRE ME</H2>
    <p id="work"> I'm looking to expand my portfolio while I'm young and align my skill set to the requirements, who loves to explore new oppurtunities and is an effective communicator.</p>
	<a href="hireme-edit.html" style="text-align:right;"><button>EDIT THE CONTENT </button></a>
		
		<br/><br/>
	<?php
                    $servername = "localhost";
                    $username = "gokulraj_root";
                    $password = "paapubava123";
                    $dbname = "gokulraj_wdm";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT H_id,cart_img, cart_price, cart_title, cart_desc ,cart_desc_2, cart_desc_3 FROM hire_me";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
							$img=$row['cart_img'];
							
							echo "<table  id='workexp'>";
                            echo "<tr>
										<td id='wtdl'> <img src=$img alt='download' width='250px' height='200px' align='center'>".
										"<br/></td><td id='wtdr'><h3>".$row['H_id'].". $".$row['cart_price'].
										"<br/>".$row['cart_title'].							
										"</h3><br/>".$row['cart_desc'].
										"<br/>".$row['cart_desc_2'].
										"<br/>".$row['cart_desc_3'].
										"</td></tr><hr>";
										 echo "</table>";
                        }
						echo "<hr>";
                       
                    }
                     else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
    
    <br><br>
    

   
    <h2 style="text-align:left;"> SKILLS & KNOWLEDGE</h2>
    <p id="work"> I'm looking to expand my portfolio while I'm young and align my skill set to the requirements, who loves to explore new oppurtunities and is an effective communicator.</p>
    <table id="progress">
        <tr>
            <td id="dl">
<h3>SOFTWARE </h3><BR><BR><BR>

                HTML <BR>
                <div class="w-light-grey w-small">
                    <div class="w-blue" style="height:20px;width:75%">75%</div>
                </div><BR>
                CSS <BR>
                <div class="w-light-grey w-small">
                    <div class="w-blue" style="height:20px;width:80%">80%</div>
                </div><BR>
                BOOTSTRAP <BR>
                <div class="w-light-grey w-small">
                    <div class="w-blue" style="height:20px;width:75%">75%</div>
                </div><BR>
                BLENDER <BR>
                <div class="w-light-grey w-small">
                    <div class="w-blue" style="height:20px;width:70%">70%</div>
                </div><BR>
                PHOTOSHOP <BR>
                <div class="w-light-grey w-small">
                    <div class="w-blue" style="height:20px;width:60%">60%</div>
                </div>
            </td>
            <td id="dr">
                <h3>RECOGNITIONS </h3>
                <DIV>
                    <img style="padding: 0 15px; float: left;" src="Images/computer.png" alt="download" width="150px" height="150px">
                    <p style="margin-top:20px;"></p><p>
                    <H4>
                    International Design Awards 2014</H4>
                    15th March 2014/ New York State University<br> Place 3</p>
                </DIV>
                <DIV>
                    <img style="padding: 0 15px; float: left;" src="Images/brush.png" alt="download" width="150px" height="150px">
                    <p style="margin-top:20px;"></p><p>
                        <H4>
                            Logo Design Contest 2015
                        </H4>
                        10th March 2015/ New York State University<br> Place 2</p>
</DIV>
                <DIV>
                    <img style="padding: 0 15px; float: left;" src="Images/program.png" alt="download" width="150px" height="150px">
                    <p style="margin-top:20px;"></p><p>
                        <H4>
                            Web Design Contest 2016
                        </H4>
                        5th March 2016/ New York State University<br> Place 3</p>
</DIV>
            </td>
        </tr>

        <tr>
            <td>
            <div class="page">
                <h3>LANGUAGE SKILLS</h3> <BR>
                <!-- default -->
                <div class="clearfix">
                    <div class="c100 p75 big">
                        <span>Spanish</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <div class="c100 p50 big">
                        <span>English</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <div class="c100 p25 big">
                        <span>Italian</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                </div>
                </div>
                </td>
            <td>
                <h3>KNOWLEDGE</h3> 
               
                <ul class="ulul">
                    <li>&emsp; 3D Design</li>
                    <li>&emsp;Grid & Layout</li>
                    <li>&emsp; Google Analytic</li>
                    <li>&emsp; Video Editing</li>
                    <li> &emsp;Digital Painting</li>
                </ul>
                </td>

</tr>
    </table>
    <h3 style="font-size:larger;">HOBBIES & INTERESTS</h3>
    <TABLE>
        <tr>
            <td>
                <img src="Images/dumbbell.png" alt="download" width="75px" height="75px"><br>
            Sports
            </td>
            <td>
                <img src="Images/photo.png" alt="download" width="75px" height="75px"><br>
                Photography

            </td>
            <td>
                <img src="Images/marketing.png" alt="download" width="75px" height="75px"><br>
                Marketing
            </td>
            <td>
                <img src="Images/movies.png" alt="download" width="75px" height="75px"><br>
                Movies
            </td>
            <td>
                <img src="Images/fashion.png" alt="download" width="75px" height="75px"><br>
                Fashion
            </td>
            <td>
                <img src="Images/computer.png" alt="download" width="75px" height="75px"><br>
                Technology
            </td>
            <td>
                <img src="Images/travel.png" alt="download" width="75px" height="75px"><br>
                Travel
            </td>
            <td>
                <img src="Images/history.png" alt="download" width="75px" height="75px"><br>
                History
            </td>
            <td>
                <img src="Images/music.png" alt="download" width="75px" height="75px"><br>
                Music
            </td>
           

        </tr>
        </TABLE>


    <br><br>


    <footer>
        <nav>

              <div class="topnav-right">
                <a href="HomePage.html" class="active">HOME</a>
                <a href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/Skill1.php">MY SKILLS</a>
                <a href="recommendation.html">RECOMMENDATION</a>
                <a href="customers.html">CUSTOMERS</a>
                <a href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/works1.php">WORKS</a>
                <a href="Contact.html">CONTACT FORM</a>
            </div>
        </nav>
    </footer>
</body>
</html>











