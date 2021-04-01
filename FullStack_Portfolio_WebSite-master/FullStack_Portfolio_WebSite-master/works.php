<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>WORKS-CUSTOMER</title>
    <link rel="stylesheet" type="text/css" href="Style/portfolio.css">
</head>
<body >

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
    
    <h2 style="text-align:left;"> MY LATEST WORKS</h2>    
    <p id="work"> I'm looking to expand my portfolio while I'm young and align my skill set to the requirements, who loves <br> explore new oppurtunities and is an effective communicator.</p>
	
		
	
   <div>
 		<button class="tablinks" id="defaultOpen" onclick="openworks(event, 'Showall')" name="defaultOpen">SHOW ALL</button>
		<button class="tablinks"  onclick="openworks(event, 'Websites')">WEBSITES</button>
		<button class="tablinks"  onclick="openworks(event, 'Apps')">APPS</button>
		<button class="tablinks"  onclick="openworks(event, 'Design')">DESIGN</button>
 		<button class="tablinks"  onclick="openworks(event, 'Photography')">PHOTOGRAPHY</button>  
	
   </div>
	<div id="Showall" class="tabcontent">
	<br/><br/><br/>
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

                    $sql = "SELECT Latest_WID,Pic1,W_Title,Domain FROM latest_work";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
						echo "<table><tr>";
					    $var=0;
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
							$var=$var+1;
													
														
							$img=$row['Pic1'];							

                            echo "<td><img src=$img alt='download' width='200px' height='200px'> ".
										"</td><td>".$row['Latest_WID'].". ".$row['W_Title'].
										"<br/>".$row['Domain'].
										
										"</td>";
										
							
							if($var=='3' || $var=='6' || $var=='9')
								echo "</tr><tr>";
							 
                        }
						echo "</table>";
                       
                    }
                     else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>

</div>

<div id="Websites" class="tabcontent">
   <br><br>
   <br/><br/><br/>
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

                    $sql = "SELECT Latest_WID,Pic1,W_Title,Domain FROM latest_work WHERE Domain='Website'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
						echo "<table><tr>";
					    $var=0;
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
							$var=$var+1;
													
														
							$img=$row['Pic1'];							

                            echo "<td><img src=$img alt='download' width='200px' height='200px'> ".
										"</td><td>".$row['Latest_WID'].". ".$row['W_Title'].
										"<br/>".$row['Domain'].
										
										"</td>";
										
							
							if($var=='3' || $var=='6' || $var=='9')
								echo "</tr><tr>";
							 
                        }
						echo "</table>";
                       
                    }
                     else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>

</div>

<div id="Apps" class="tabcontent">
	<br><br>
	<br/><br/><br/>
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

                    $sql = "SELECT Latest_WID,Pic1,W_Title,Domain FROM latest_work WHERE Domain='Apps' or Domain='APPS'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
						echo "<table><tr>";
					    $var=0;
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
							$var=$var+1;
													
														
							$img=$row['Pic1'];							

                            echo "<td><img src=$img alt='download' width='200px' height='200px'> ".
										"</td><td>".$row['Latest_WID'].". ".$row['W_Title'].
										"<br/>".$row['Domain'].
										
										"</td>";
										
							
							if($var=='3' || $var=='6' || $var=='9')
								echo "</tr><tr>";
							 
                        }
						echo "</table>";
                       
                    }
                     else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>

</div>

<div id="Design" class="tabcontent">
	<br><br>
	<br/><br/><br/>
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

                    $sql = "SELECT Latest_WID,Pic1,W_Title,Domain FROM latest_work WHERE Domain='Blender' or Domain='Design'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
						echo "<table><tr>";
					    $var=0;
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
							$var=$var+1;
													
														
							$img=$row['Pic1'];							

                            echo "<td><img src=$img alt='download' width='200px' height='200px'> ".
										"</td><td>".$row['Latest_WID'].". ".$row['W_Title'].
										"<br/>".$row['Domain'].
										
										"</td>";
										
							
							if($var=='3' || $var=='6' || $var=='9')
								echo "</tr><tr>";
							 
                        }
						echo "</table>";
                       
                    }
                     else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>

</div>

<div id="Photography" class="tabcontent">
	<br><br>
	<br/><br/><br/>
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

                    $sql = "SELECT Latest_WID,Pic1,W_Title,Domain FROM latest_work WHERE Domain='photography'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
						echo "<table><tr>";
					    $var=0;
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
							$var=$var+1;
													
														
							$img=$row['Pic1'];							

                            echo "<td><img src=$img alt='download' width='200px' height='200px'> ".
										"</td><td>".$row['Latest_WID'].". ".$row['W_Title'].
										"<br/>".$row['Domain'].
										
										"</td>";
										
							
							if($var=='3' || $var=='6' || $var=='9')
								echo "</tr><tr>";
							 
                        }
						echo "</table>";
                       
                    }
                     else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>

</div>

	<br><br><br><br>
<script>

document.getElementById("defaultOpen").click();
    function openworks(evt, work) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(work).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
<br><br><br><br><br><br><br><br><br><br>
    <footer>
        <nav>

              <div class="topnav-right">
                <a href="HomePage.html" class="active">HOME</a>
                <a href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/Skill.php">MY SKILLS</a>
                <a href="recommendation.html">RECOMMENDATION</a>
                <a href="customers.html">CUSTOMERS</a>
                <a href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/works.php">WORKS</a>
                <a href="Contact.html">CONTACT FORM</a>
            
            </div>
        </nav>
        </footer>
</body>
</html>