<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Purchase Result </title>
<?php include 'UI.php';?>
		</head>

  <body> 

     
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Brac Airport </div>
			<div class="col-md-10" style="text-align: center"> 
				
				<a href="search_flight.php" >Flight Search </a> 
				 
			</div>
		</div>
	</section>
	
	<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Purchase Result </div>
		<a href="bookingindex.php" style="text-align: center; font-size: 20px; color:#2d2244"> Book Again  </a>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;opacity: 0.7;text-align:center;background:#fcc298;">
			<div class="row" style="padding:5px;"> 
			</div>	
<?php
require_once('dbconnect.php');

if(isset($_POST['sid']) && isset($_POST['omg']) && isset($_POST['cls']) && isset($_POST['address']) && isset($_POST['pport']) && isset($_POST['iss']) && isset($_POST['exp']) && isset($_POST['ccn']))
{
	
	$b = $_POST['sid'];
	$d = $_POST['omg'];
	$e = $_POST['cls'];
	$f = $_POST['address'];
	$g = $_POST['pport'];
	$h = $_POST['iss'];
	$i = $_POST['exp'];
	$j = $_POST['ccn'];
	$sql = "insert into ticket(fullname,flight_id,date,email,passport_no,passport_issue,passport_expire,card_number,ticket_number) values ( '$b', '$d','$e', '$f', '$g', '$h', '$i', '$j', FLOOR(RAND()*(20-10+1))+1000000)";
	
	 
	$result = mysqli_query($conn, $sql);
	$sql2 = "SELECT fullname,ticket_number,flight_id,passport_no FROM ticket WHERE passport_no ='$g'";
	$result2 = mysqli_query($conn, $sql2);

	if(mysqli_num_rows($result2))
	{
	  while($row = mysqli_fetch_array($result2))
	  {
		  echo "<br> Passenger Name: ". $row[0]."<br>";
		  echo "<br> Ticket Number: ". $row[1]."<br>";
		  echo "<br> Flight Id: ". $row[2]."<br>";
		  echo "<br> Passport No: ". $row[3]."<br>";
		  echo "</br>";
		  
		  echo "Thank You For Choosing Us </br>";
	}
	
	

}
}
?>
	</section>
	
	<!----- Footer ----->
<?php include 'Footer.php';?>
  </body> 
</html>