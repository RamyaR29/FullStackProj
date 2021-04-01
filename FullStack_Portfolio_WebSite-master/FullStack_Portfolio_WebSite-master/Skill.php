<?php
	session_start();
	?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>MySkills-CUSTOMER</title>
    <link rel="stylesheet" type="text/css" href="Style/myskills.css">
</head>
<body id="home">

    <header>
        <nav>
            <h1 align="left">GOKULRAJ JAYAKUMAR</h1>
            <div class="topnav-right">
               <a href="HomePage.html" class="active">HOME</a>
                <a href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/Skill.php">MY SKILLS</a>
                <a href="recommendation.html">RECOMMENDATION</a>
                <a href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/works.php">WORKS</a>
                <a href="http://gokulrajjayakumar.uta.cloud/GokuBlog/">BLOG</a>
                <a href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/hireme.php">HIRE ME</a>
                <a href="SignUp.html">SIGN UP</a>
            </div>
        </nav>
    </header>
   
   

        <div class="row">
            <div class="column left" >
                <h2>SKILLS & <br>EXPERTISE</h2>
                <p>
                    Visual Designer Front-end Developer 3D <br>Designer<br><br>
                    <img src="Images/profile1.png" alt="download" width="400px" height="600px" align="center">
                </p>
            </div>
            <div class="column right" >
                <table>

                    <tr>
                        <td>
                          
                            <img src="Images/rock.png" alt="download" width="50px" height="50px" align="left">
                                <br><br><h3>Branding </h3>
                                
                                  Creating logos and posters for <br>
                            your company.
                           

                        </td>
                        <td>
                            <img src="Images/computer.png" alt="download" width="50px" height="50px" align="left">
                            <br><br><h3>Marketing </h3>

                           Trend designs for a better<br>
                            experience of both images, logos <br>and websites.

                        </td>

                    </tr>
                    <tr>
                        <td>

                            <img src="Images/brush.png" alt="download" width="50px" height="40px" align="left">
                            <br><br><h3>Designing </h3>

                            Maintaining the quality and<br>
                            productivity in the work to please<br>the clients.

                        </td>
                        <td>
                            <br>
                            <img src="Images/program.png" alt="download" width="50px" height="40px" align="left">
                            <br><br><h3>Programming</h3>

                           Developing applications and<br>
                            systems that meet the needs and<br>streamline the work <br> experience of users.
                        </td>

                    </tr>

                </table>
                <div class="smart">
                <h3>Smart Digital Solutions : A Front-End Developer</h3>
                <img src="Images/device01.png" alt="download" width="200px" height="200px" align="left">
                <img src="Images/device02.png" alt="download" width="200px" height="200px" align="left">
                <img src="Images/device03.png" alt="download" width="200px" height="200px" align="left">
                    </div>
            </div>
        </div>
		

 


 <H2 style="text-align:left;"> WORK EXPERIENCE</H2>
   <p id="work"> I'm looking to expand my portfolio while I'm young and align my skill set to the requirements, who loves <br> explore new oppurtunities and is an effective communicator.</p>
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

                    $sql = "SELECT work_id,W_Month, W_Year, Company, W_Title, W_Title_desc FROM work_experience";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
							echo "<table  id='workexp'>";
                            echo "<tr>
										<td id='wtdl'>".$row['work_id'].".  ".$row['W_Month']."  ".
										"<br/><h3>".$row['W_Year'].
										"</h3><br/>".$row['Company'].
										"<br/><h3>".$row['W_Title'].
										"</td><td id='wtdr'>".$row['W_Title'].
										"</h3><br/>".$row['W_Title_desc'].
										"</td></tr><hr>";
										 echo "</table>";
                        }
                       
                    }
                     else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
   

    <br><br>


    <H2 style="text-align:left;"> EDUCATION</H2>
    <p id="work"> I'm looking to expand my portfolio while I'm young and align my skill set <br> the requirements, who loves to explore new oppurtunities and is an effective communicator.</p>

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

                    $sql = "SELECT Edu_id,Edu_Month, Edu_year, Degree, Deg_Title, Deg_desc FROM education";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
							echo "<table  id='workexp'>";
                            echo "<tr>
										<td id='wtdl'>".$row['Edu_id'].".  ".$row['Edu_Month']."  ".
										"<br/><h3>".$row['Edu_year'].
										"</h3><br/>".$row['Degree'].
										
										"</td><td id='wtdr'>".$row['Deg_Title'].
										"<br/>".$row['Deg_desc'].
										"</td></tr><hr>";
										 echo "</table>";
                        }
                       
                    }
                     else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
    

    <br><br> 



    <footer><nav>
                  <div class="topnav-right">
                <a href="HomePage.html" class="active">HOME</a>
                <a href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/Skill.php">MY SKILLS</a>
                <a href="recommendation.html">RECOMMENDATION</a>
                <a href="customers.html">CUSTOMERS</a>
                <a href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/works.php">WORKS</a>
                <a href="Contact.html">CONTACT FORM</a>
            </div>
</nav></footer>
</body>
</html>
