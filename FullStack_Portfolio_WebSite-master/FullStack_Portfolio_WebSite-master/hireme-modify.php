<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Update</title>
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
                <a href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/Skill1.php">MY SKILLS</a>
                <a href="recommendation.html">RECOMMENDATION</a>
                <a href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/works1.php">WORKS</a>
                <a href="http://gokulrajjayakumar.uta.cloud/GokuBlog/">BLOG</a>
                <a href="http://gokulrajjayakumar.uta.cloud/Jayakumar_portfolio/hireme1.php">HIRE ME</a>
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
	 if(isset($_POST['save'])){
		 if(isset($_POST['hid'])){
			$id=$_POST['hid'];
			$sql="update hire_me set ";
				if(!empty($_POST['pic1']))
				{
						$month=$_POST['pic1'];
						$sql=$sql."cart_img='$month' ";
				}
			
					if(!empty($_POST['cprice']))
					{	$title=$_POST['cprice'];
						$sql=$sql."cart_price='$title' ";
					}
					if(!empty($_POST['ctitle']))
					{	$title=$_POST['ctitle'];
						$sql=$sql."cart_title='$title' ";
					}
					
					if(!empty($_POST['cd1']))
					{	$cd1=$_POST['cd1'];
						$sql=$sql."cart_desc='$cd1' ";
					}
					
					if(!empty($_POST['cd2']))
					{	$cd1=$_POST['cd2'];
						$sql=$sql."cart_desc_2='$cd1' ";
					}
					
					if(!empty($_POST['cd3']))
					{	$cd1=$_POST['cd3'];
						$sql=$sql."cart_desc_3='$cd1' ";
					}
					
					$sql=$sql."where H_id='$id'";
					echo "$sql<br/>";
					//$sql="update education set Edu_Month='jan' where Edu_id='1'";
					//echo "$sql";
					$result = mysqli_query($con,$sql);
					echo '<h2 align="center">QUERY SUCCESSFULLY EXECUTED</h2>';
			
				
		 }
		 else
		 {
			echo "enter the id for reference !!!" ;
		 }
	 }
	 else 
	 {
		 echo "click submit !!!";
	 }
	 
	
}
else {
  echo '<h2 align="center">Connection not established</h2>';
  
}
?>

	<br><BR><BR><br><BR><BR><br><BR><BR><br><BR><BR><br><BR><BR><br><BR><BR><br><BR><BR><BR><br><BR><BR><br><BR><br><BR><BR><br><BR>
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