<!DOCTYPE html>
<html>
<head>
	<title>PHP Form Example - Form Submission</title>
</head>
<body>
	<h1>PHP Form Example - Form Submission</h1>

	<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];
  
  // Print user inputs
  echo "First Name: $firstname <br>";
  echo "Last Name: $lastname <br>";
  echo "Email: $email <br>";
  
  // Count password characters
  $password_length = strlen($password);
  echo "Password length: $password_length <br>";
  
  // Check password and confirm password match
  if ($password == $confirm_password) {
    echo "Passwords match! <br>";
  } else {
    echo "Passwords do not match! <br>";
  }
} else {
  echo "Form data not received. Please try again. <br>";
}
?>

</body>
</html>