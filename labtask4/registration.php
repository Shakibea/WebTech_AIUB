<?php
include_once('validation.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body {
            margin: 0;
        }
        .nav {
            display: inline;
        }
        .logo {
            display: inline;
        }
    </style>
</head>
<body>

    <header>
        <h1 class="logo">xCompany</h1>

        <nav class="nav">
            <a href="/webtech/labtask4/home.php">Home</a> |
            <a href="/webtech/labtask4/login.php">Login</a> |
            <a href="/webtech/labtask4/registration.php">Registration</a> |
        </nav>
    </header>

    <h3>Welcome to Registration</h3>
    




<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

  <fieldset>
    <legend>Registration:</legend>

    <div>
    <?php 
      if($_POST['submit'] == "submit" ){

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
       <label for="name">Name: </label>
        
<input type="text" name="name" id="name" value=<?php $name ?>>
    
    </div> 
    <label for="email">Email: </label>
    <input type="email" name="email" id="email" value=<?php $email ?>> 
<?php if($_POST['submit'] == "submit"){ ?>
<span>*<?php echo $emailErr;?></span> <?php } ?> 
<div>
    <label for="username">Username: </label>
    <input type="text" name="username" id="username">
</div>
<div>
    <label for="password">Password: </label>
    <input type="password" name="password" id="password">
</div>


<span style="color:red"><?php echo $genderErr;?></span>
    <div>
<fieldset>
    <legend>
        Gender:
    </legend>
<input type="radio" name="gender" id="male" value="male" <?php if(isset($gender) && $gender == "male") echo "checked"; ?>>
<label for="male">Male</label>
<input type="radio" name="gender" id="female" value="female"  <?php if(isset($gender) && $gender == "female") echo "checked"; ?>>
<label for="female">Female</label>
<input type="radio" name="gender" id="others" value="others"  <?php if(isset($gender) && $gender == "others") echo "checked"; ?>>
<label for="others">Others</label>

</fieldset>

    
    </div>
    <hr>
    <input type="submit" name="submit" value="submit"> <br>

    
  </fieldset>

</form>



    <hr>
    <footer>
        <span>Copyright &#169 2017</span>
    </footer>
    <hr>
    
</body>
</html>