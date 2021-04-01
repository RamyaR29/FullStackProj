<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Contact-Form</title>
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
  echo '<h1 align="center">Connected to MySQL in contact.php</h1>';
  //if connected then Select Database.
		if(isset($_POST["save"])){
			// Checking For Blank Fields..
			if($_POST["uname"]==""||$_POST["email"]==""||$_POST["msg"]==""){
				echo "Fill All Fields..";
			}
			else{
						echo "have Filled All Fields..";
						if( isset($_POST['uname']) and isset($_POST['email']) and isset($_POST['msg']) and isset($_POST['subject']) ) {
							$user=$_POST['uname'];
							echo $user;
							$ret=mysqli_query( $con, "SELECT * FROM signup WHERE username='$user' ");
		
							$row = mysqli_fetch_assoc($ret);
		
							if($row) {
							echo '<h1 align="center">username exists!!!</h1>';	
				// Check if the "Sender's Email" input field is filled out
				$email=$_POST['email'];
				// Sanitize E-mail Address
				$email =filter_var($email, FILTER_SANITIZE_EMAIL);
				// Validate E-mail Address
				$email= filter_var($email, FILTER_VALIDATE_EMAIL);
				if (!$email){
					echo "Invalid Sender's Email";
				}
				else{
					echo '<h1 align="center">valid email</h1>';
					$subject = "Project to discuss";
					$message = $_POST['msg'];
					 $headers = 'From: 72oo846796@gmail.com' . "\r\n" .
						'Reply-To: gokulraj.jayakumar@mavs.uta.edu' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();

					//$headers = 'From:'. $email . "rn"; // Sender's Email
					
					//$headers .= 'Cc:'. $email . "rn"; // Carbon copy to Sender
					// Message lines should not exceed 70 characters (PHP rule), so wrap it
					$message = wordwrap($message, 70);
					// Send Mail By PHP Mail Function
					mail("gokulraj.jayakumar@mavs.uta.edu" , $_REQUEST['subject'] , $_REQUEST['msg'] , "From:".$_REQUEST['email'] );
					mail("gokulraj.jayakumar@mavs.uta.edu", $subject, $message, $headers);
					echo "Your mail has been sent successfuly ! Thank you for your feedback";
				
					$sql = "INSERT INTO contactform (UserName, Email, Message)
					VALUES ('".$_POST["uname"]."','".$_POST["email"]."','".$_POST["msg"]."')";
    
					//$result = mysqli_query($con,$sql);
					echo '<h1>QUERY SUCCESSFULLY EXECUTED</h1>';
					echo '<a align="center" href="homepage.html"><button type="button" id="download-button">
             Continue to the website 
			</button></a>';
				}
			}
			else
		{
			echo '<h1>Oops! It looks like you are not a valid member. Kindly register yourself!</h1>';
			echo '<a href="Login.html" align="center"><button type="button" id="download-button">
             try again 
			</button></a>&nbsp;';
			echo '<a href="SignUp.html" align="center"><button type="button" id="download-button">
             Sign UP 
			</button></a>';
		
		}
		}
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