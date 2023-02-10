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
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
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

<br>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$servername = "webprogmi211";
	$username = "webprogmi211";
	$password = "webprogmi211";
	$dbname = "hbernante_myguests";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO MyGuests (Name, Email, Website, Comment, Gender)
	VALUES ('$name', '$email', '$website', '$comment', '$gender')";
	
	if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
}
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
	
