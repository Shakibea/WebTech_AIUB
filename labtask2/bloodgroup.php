<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group</title>
</head>
<body>
<?php
$blood = $bloodErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $blood = test_input($_POST["blood"]);
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
            <legend>Blood Group</legend>
            <select name="blood">
<option value="">Choose</option>
<option value="A+" <?php if(isset($blood) && $blood == "A+") echo "selected"; ?>>A+</option>
<option value="B+" <?php if(isset($blood) && $blood == "B+") echo "selected"; ?>>B+</option>
<option value="AB+" <?php if(isset($blood) && $blood == "AB+") echo "selected"; ?>>AB+</option>
<option value="A-" <?php if(isset($blood) && $blood == "A-") echo "selected"; ?>>A-</option>
</select>
<input type="submit" name="submit" value="submit" />

<?php
if(isset($_POST['submit'])){
if(!empty($blood)) {
echo "<span>You have selected :". $blood ."</span><br/>";


}
else { echo "<span>Please Select Atleast One.</span><br/>";}
}
?>

        </fieldset>
    </form>
</body>
</html>