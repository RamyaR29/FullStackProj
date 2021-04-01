<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>HomePage.html</title>
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
  echo '<h1 align="center">Connected to MySQL</h1>';
  //if connected then Select Database.

   if(isset($_POST['save'])){
	   $username=$_POST['uname'];
		$password=$_POST['psw'];
		$firstname=$_POST['fname'];
		$lastname=$_POST['lname'];
	    if(!isset( $username, $password ))
    {
        echo '<div align="center">Please enter a valid username and password</div>';
    }
	 if (strlen( $username) > 20 || strlen($username) < 4)
     {
         echo 'Incorrect Length for Username';
     }
     if (ctype_alpha($firstname) != true)
     {
             /*** if there is no match ***/
             echo "Username cannot contain numbers";
     }
     if (ctype_alpha($lastname) != true)
     {
             /*** if there is no match ***/
             echo  "Lastname cannot contain numbers";
     }
        $sql = "INSERT INTO signup (Name,LastName,Email,UserName, Password, RepeatPassword)
        VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["email"]."','".$_POST["uname"]."','".$_POST["psw"]."','".$_POST["rpsw"]."')";
    }
	$result = mysqli_query($con,$sql);
   echo '<h2 align="center">QUERY SUCCESSFULLY EXECUTED</h2>';
}
else {
  echo '<h2 align="center">MySQL Server is not connected</h2>';
  echo '<a align="center" href="homepage.html"><button type="button" id="download-button">
             Continue to the website 
			</button></a>';
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