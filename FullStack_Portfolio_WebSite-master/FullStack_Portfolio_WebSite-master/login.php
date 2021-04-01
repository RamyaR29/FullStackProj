<?php
	session_start();
	?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Login.php</title>
	<link rel="stylesheet" type="text/css" href="Style/portfolio.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="home">
    <header>
        <nav>
            <h1>GOKULRAJ JAYAKUMAR</h1>
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

<?php
$host="localhost";
$user="gokulraj_root";
$password="paapubava123";
$con=mysqli_connect($host,$user,$password,"gokulraj_wdm");
if($con) {
  echo '<h2 align="center">Connected to MySQL</h2>';
  //if connected then Select Database.


		
		if( isset($_POST['uname']) and isset($_POST['psw']) ) {
		$user=$_POST['uname'];
		$pass=$_POST['psw'];
 
		$ret=mysqli_query( $con, "SELECT * FROM signup WHERE username='$user' AND password='$pass' ");
		
		$row = mysqli_fetch_assoc($ret);
		
		if($row) {
			if($user=="Admin")
			{
				echo "<h2 align='center'>Welcome Admin ! Continue your browsing with previleged access !!!</h2>";
				$_SESSION["user"]="Admin";
				echo '<a align="center" href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/HomePage1.html"><button type="button" id="download-button">
             Continue to the website 
			</button></a>';
			}
			else {
			echo '<h2 align="center">WOW! It looks like your username and/or password are correct. Continue browsing :)</h2>';
					echo '<a align="center" href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/HomePage.html"><button type="button" id="download-button">
             Continue to the website 
			</button></a>';
			}
			
		}
		else
		{
			echo '<h2 align="center">Oops! It looks like your username and/or password are incorrect. Please try again.</h2>';
			echo '<a href="Login.html" align="center"><button type="button" id="download-button">
             try again 
			</button></a>&nbsp;';
			echo '<a href="SignUp.html" align="center"><button type="button" id="download-button">
             Sign UP 
			</button></a>';
}
    }
	
}
else {
  echo '<h1>MySQL Server is not connected :(</h1>';
}
?>

<br><BR><BR><br><BR><BR><br><BR><BR><br><BR><BR><br><BR><BR><br><BR><BR><br><BR><BR><BR><br><BR><BR><br><BR><br><BR><BR><br><BR>
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