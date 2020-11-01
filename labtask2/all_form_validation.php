<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        span {
            color: red;
        }

      
    </style>
</head>
<body>
    
<?php 

$name =  "";

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
    if($_POST['submit3'] == "submit"){
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }
    }
}

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

<!-- name -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

  <fieldset>
    <legend>Name:</legend>
    <div>
    <?php 
      if($_POST['submit5'] == "submit" ){

        if(str_word_count($name) <= 1){ ?>

    <span>atleast two words</span> <br>
    <?php      
        }
        if(empty($name)){ ?>
          <span>can't be null</span> <br>
          
          <?php
        }

        if(preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["name"]) === 0){ ?>
        
        <span>must start with Upper case letter</span><br>

<?php
        }

       } ?>
        


<input type="text" name="name" id="name" value=<?php $name ?>>
    
    </div>
    <hr>
    <input type="submit" name="submit5" value="submit"> <br>

    
  </fieldset>

</form>

<br>
<br>


<!-- email -->

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

  <fieldset>
    <legend>Email:</legend>
    <div>

<input type="email" name="email" id="email" value=<?php $email ?>>
<?php if($_POST['submit4'] == "submit"){ ?>
<span>*<?php echo $emailErr;?></span> <?php } ?>

    
    </div>
    <hr>
    <input type="submit" name="submit4" value="submit"> <br>

    
  </fieldset>

</form>

<br>
<br>

<!-- date -->

<form action="post">
  <fieldset>
    <legend>Date</legend>
  </fieldset>
</form>




<br>
<br>
<!-- gender -->
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
    <input type="submit" name="submit3" value="submit"> <br>

    
  </fieldset>

</form>


<br>
<br>
<!-- degree -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <fieldset>
            <legend>Degree</legend>
            <?php 
        $val = $_POST['mulradio'];

        if(count($val) >= 2 && $_POST['submit2'] == "submit"){
            echo "ok";
        }else{
            echo "<span>At least Two radio check</span>";
        }
    ?>
            <div>
                <input type="radio" name="mulradio[0]" id="ssc" value="1">
                <label for="degree">SSC</label>
                <input type="radio" name="mulradio[1]" id="hsc" value="2">
                <label for="degree">HSC</label>
                <input type="radio" name="mulradio[2]" id="bsc" value="3">
                <label for="degree">BSc</label>
                <input type="radio" name="mulradio[3]" id="msc" value="4">
                <label for="degree">MSc</label>
            </div>
            <div>
                <input type="submit" name="submit2" value="submit">
            </div>
        </fieldset>
    </form>


    <br>
<br>
    <!-- bloodgroup -->
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
<input type="submit" name="submit1" value="submit" />

<?php
if(isset($_POST['submit1'])){
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