<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender</title>
</head>
<body>

<?php
// define variables and set to empty values
$gender = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $email = test_input($_POST["gender"]);
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
    <legend>Gender:</legend>

<span style="color:red"><?php echo $genderErr;?></span>
    <div>

<input type="radio" name="gender" id="male" value="male" <?php if(isset($gender) && $gender == "male") echo "checked"; ?>>
<label for="male">Male</label>
<input type="radio" name="gender" id="female" value="female"  <?php if(isset($gender) && $gender == "female") echo "checked"; ?>>
<label for="female">Female</label>
<input type="radio" name="gender" id="others" value="others"  <?php if(isset($gender) && $gender == "others") echo "checked"; ?>>
<label for="others">Others</label>

    
    </div>
    <hr>
    <input type="submit" name="submit" value="submit"> <br>

    
  </fieldset>

</form>
    
</body>
</html>