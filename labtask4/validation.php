<?php
$name =  "";

$submit = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submit = test_input($_POST["submit"]);
  }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
}

$email = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      }
    
}

$gender = $genderErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }
}

$username = $usernameErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"])) {
        $username = test_input($_POST["username"]);

      } else {
        $usernameErr = "Username is required";

      }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>