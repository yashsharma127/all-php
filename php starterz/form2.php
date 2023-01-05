<html>
<body> 
<form action = "elcome.php" method = "POST">
Name:        <input type= "text" name= "name"><br>
Gender:      <input type= "text" name="gender"><br>
E-Mail:      <input type= "text" name= "email"><br>
<input type = "Submit">


</body>
</html>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>