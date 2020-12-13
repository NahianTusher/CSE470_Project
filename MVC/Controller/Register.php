<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Signup Page </title>
<style>   
    Body {  
      font-family: Calibri, Helvetica, sans-serif;  
	  background:url(https://wallpapercave.com/wp/wp2574285.jpg) no-repeat center fixed;
	  background-size: cover;
    }  
    button {   
           background-color: #03052e;   
           width: 25%;  
            color: white;   
            padding: 12px;
            margin: 0px 80px;   
            border: 4px black;   
            cursor: pointer; 
            
             }   
      form {   
            position: fixed;  
            top: 180px;
            left: 827px;
            
            width: 25%;
            height: 28%;
        }   
     input[type=password] {   
            width: 35%;   
            margin: 15px 15px;  
            padding: 8px 20px;   
            display: inline-block;
            border: 14px black;   
            box-sizing: border-box;
            opacity: 0.7   
        }  
     input[type=text] {   
            width: 35%;   
            margin: 15px 10px;  
            padding: 8px 20px;   
            display: inline-block;
            border: 14px black;   
            box-sizing: border-box;
            opacity: 0.7   
        }  
     input[type=number], input[type=date] {  
            width: 35%;   
            margin: 15px 10px;  
            padding: 8px 20px;   
            display: inline-block;
            border: 14px black;   
            box-sizing: border-box;
            opacity: 0.7   
        }  

     button:hover {   
            opacity: 0.7;   
        }   

              .container { 
            padding: 10px;
            background-color: #0000000.5;  
        }   

    </style>
		</head>

  <body>
	
	<section id = "section1">
		<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Brac Airlines </div>
                <div class="col-md-10" style="text-align: center; font-size: 26px;"> SIGN UP </div>
		
		<form action="insert.php" class="form_design" method="post" style="color:White">

Name <input type="text" placeholder="Enter Name" name="fullname"> <br/>
Username <input type="text" placeholder="Enter Username" name="uname"> <br/>
Gender <input type="text" placeholder="Enter Gender" name="gen"> <br/>
Email <input type="text" placeholder="Enter Email ID" name="email"> <br/>
Credit Card No <input type="text" placeholder="Enter Credit Card No" name="card"> <br/>
Address <input type="text" placeholder="Enter Address" name="live"> <br/>
Date of Birth <input type="date" name="bd"> <br/> <br/>
Mobile Number <input type="number" placeholder="Enter Mobile Number" name="mob"> <br/>
Passport <input type="text" placeholder="Enter Passport" name="pport"> <br/> 
Password <input type="password" placeholder="Enter Password" name="pass"> <br/> 


			<button type="submit" value="Add to Database">Sign Up</button> <br><br>
                        
		</form>
	</section>
<?php include 'Footer.php';?>
  </body> 
</html>
