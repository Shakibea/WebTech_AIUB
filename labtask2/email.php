<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>

    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>

<?php
// define variables and set to empty values
$email = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

  <fieldset>
    <legend>Email:</legend>
    <div>

<input type="email" name="email" id="email" value=<?php $email ?>>
<span class="error">*<?php echo $emailErr;?></span>

    
    </div>
    <hr>
    <input type="submit" name="submit" value="submit"> <br>

    
  </fieldset>

</form>
    
</body>
</html>