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
		 if(isset($_POST['wid'])){
			$id=$_POST['wid'];
			$sql="update work_experience set ";
				if(!empty($_POST['wmonth']))
				{
						$month=$_POST['wmonth'];
						$sql=$sql."W_Month='$month' ";
				}
				
				
					if(!empty($_POST['wyear']))
					{
							$year=$_POST['wyear'];
							$sql=$sql."W_Year='$year' ";
					}
					
						 if(!empty($_POST['wcomp']))
					{	$deg=$_POST['wcomp'];
						$sql=$sql."Company='$deg' ";
					}
					if(!empty($_POST['wtitle']))
					{	$title=$_POST['wtitle'];
						$sql=$sql."W_Title='$title' ";
					}
					if(!empty($_POST['wdesc']))
					{	$title=$_POST['wdesc'];
						$sql=$sql."W_Title_Desc='$title' ";
					}
					
					$sql=$sql."where work_id='$id'";
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
		 echo "click teh submit !!!";
	 }
	 
	
}
else {
  echo '<h2 align="center">Connection not establoished</h2>';
  
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