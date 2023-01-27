<!DOCTYPE html>
<html>
<body>

 

<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  global $x;
  echo "<p>THE Variable x inside function is: $x</p>";
} 
myTest();

 

echo "<p>THE Variable x outside function is: $x</p>";
?>

 

</body>
</html>