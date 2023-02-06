<!DOCTYPE html>
<html>
	<head>
		<meta charset="utc-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://kit.fontawesome.com/d53509f5f3.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="styles.css">
		<title>Bernante's Portfolio</title>
	</head>
	<body>
	
	<div class="wrapper">
		<div class="sidebar" id="navLinks">
			<!--<i class="fa fa-times" onclick="hideMenu()"></i>-->
			<h2>:Main Menu:</h2>
			<ul>
				<li><a href="#"><i class="fa-solid fa-house-user"></i> HOME</a></li>
				<li><a href="#"><i class="fa-solid fa-address-card"></i> ABOUT ME</a></li>
				<li><a href="#"><i class="fa-solid fa-person-chalkboard"></i> LESSONS</a></li>
				<li><a href="#"><i class="fa-solid fa-address-book"></i> CONTACTS</a></li>
			</ul>
			<div class="social_media">
				<a href="https://www.facebook.com/BernanteHanzel"><i class="fa-brands fa-square-facebook"></i></a>
				<a href="https://twitter.com/Beeeeernante"><i class="fa-brands fa-square-twitter"></i></a>
				<a href="https://www.instagram.com/zel_bernante/"><i class="fa-brands fa-square-instagram"></i></a>
			</div>
			<!--<i class="fa fa-bars" onclick="showMenu()"></i>-->
		</div>
		<div class="main_content">
			<div class="header">
					Hello, welcome to Hanzel Bernante's Website!
			</div>
			
			<?php
					// define variables and set to empty values
					$name = $email = $gender = $comment = $website = "";

					if ($_SERVER["REQUEST_METHOD"] == "POST") {
					  $name = test_input($_POST["name"]);
					  $email = test_input($_POST["email"]);
					  $website = test_input($_POST["website"]);
					  $comment = test_input($_POST["comment"]);
					  $gender = test_input($_POST["gender"]);
					}

					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					  return $data;
					}
					?>

					<h2>PHP Form Validation Example</h2>
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
					  Name: <input type="text" name="name">
					  <br><br>
					  E-mail: <input type="text" name="email">
					  <br><br>
					  Website: <input type="text" name="website">
					  <br><br>
					  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
					  <br><br>
					  Gender:
					  <input type="radio" name="gender" value="female">Female
					  <input type="radio" name="gender" value="male">Male
					  <input type="radio" name="gender" value="other">Other
					  <br><br>
					  <input type="submit" name="submit" value="Submit">  
					</form>

			<?php
				echo "<h2>Your Input:</h2>";
				echo $name;
				echo "<br>";
				echo $email;
				echo "<br>";
				echo $website;
				echo "<br>";
				echo $comment;
				echo "<br>";
				echo $gender;
			?>
			
			
			<div class="info">
				<section>
				<div class="text-box">
				<br>
				<br>
				
				
				
				
				
				<br>
				<br>
				</div>
				</section>
			</div>
		</div>
	</div>	
	
