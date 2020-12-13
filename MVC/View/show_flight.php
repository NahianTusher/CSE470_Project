<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Show Flights </title>
<?php include 'UI.php';?>
		</head>

  <body>
 <!-- following section is used for creating the menubar in the webpage -->

	
  	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Brac Airlines </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				
                <a href="add_flight.php"> Add Flight </a> 
				<a href="delete_flight.php" style="margin-left: 20px;"> Delete Flight </a> 
				<a href="update_flight.php" style="margin-left: 20px;"> Update Flight </a> 
				<a href="search_flight1.php" style="margin-left: 20px;"> Search Flight </a> <br><br><br>
				 
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Search Result </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;opacity: 0.7;text-align:center;background:#fcc298;">	
			<div class="col-md-10" style="text-align: center; font-size: 18px; color:#0d0f0e">
			
			<?php 
			require_once("DBconnect.php");
			$sql = "SELECT * FROM flight_details";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				
				while($row = mysqli_fetch_array($result)){
				
			?>
			<div class="row" style="padding:35px;"> 
				<div class="col-md-2"> Flight ID : <?php echo $row[0];?> </div>
				<div class="col-md-2"> Date : <?php echo $row[1];?> </div>
				<div class="col-md-2"> Passenger Limit : <?php echo $row[2] ?> </div>
				<div class="col-md-2"> Flight Status : <?php echo $row[3] ?> </div>
				<div class="col-md-2"> Departure Location : <?php echo $row[4] ?> </div>
				<div class="col-md-2"> Destination : <?php echo $row[5] ?> </div>
				<div class="col-md-2"> Departure Time : <?php echo $row[6] ?> </div>
			</div>
			
			<?php 
				}					
			}
			?>
			
		</div>
		</div>
		
		
		
		
	</section>

	
	<!----- Footer ----->
<?php include 'Footer.php';?>
  </body> 
</html>


