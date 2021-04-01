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
 // echo '<h1 align="center">Connected to MySQL</h1>';
	 if(isset($_POST['save'])){
		 if(isset($_POST['eid'])){
			$id=$_POST['eid'];
			$sql="update education set ";
				if(!empty($_POST['emonth']))
				{
						$month=$_POST['emonth'];
						$sql=$sql."Edu_Month='$month' ";
				}
				
				
					if(!empty($_POST['eyear']))
					{
							$year=$_POST['eyear'];
							$sql=$sql."Edu_Year='$year' ";
					}
					
						 if(!empty($_POST['edeg']))
					{	$deg=$_POST['edeg'];
						$sql=$sql."Degree='$deg' ";
					}
					if(!empty($_POST['etitle']))
					{	$title=$_POST['etitle'];
						$sql=$sql."Deg_Title='$title' ";
					}
					if(!empty($_POST['edesc']))
					{	$title=$_POST['edesc'];
						$sql=$sql."Deg_Desc='$title' ";
					}
					
					$sql=$sql."where Edu_id='$id'";
					//echo "$sql<br/>";
					//$sql="update education set Edu_Month='jan' where Edu_id='1'";
					//echo "$sql";
					$result = mysqli_query($con,$sql);
					echo '<h2 align="center">SUCCESSSFULLY MODIFIED !!!</h2>';
			
				
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