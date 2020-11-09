<?php
include_once('validation.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    <h3>Welcome to Login</h3>
    

    <form  action="#" method="post">
      <div >
        <fieldset>
          <legend>Login:</legend>
          <span style="color: red;"><?php echo $usernameErr; ?></span><br>
          <label for="username">Username: </label>
          <input type="text" name="username" id="username"><br>
          <label for="password">Password: </label>
          <input type="password" name="password" id="password"><br>
          <input type="checkbox" id="Remember" name="Remember" value="Remember">
          <label for="Remember">Remember Me</label><br>

            <input type="submit" name="submit" value="submit">
            <a href="/webtech/labtask4/forgetpass.php">Forgot Password?</a>


      </div>

    </form>

    <?php if($submit == "submit" && isset($username)) {
        header("Location: /webtech/labtask4/profile.php");
     } ?>



    <hr>
    <footer>
        <span>Copyright &#169 2017</span>
    </footer>
    <hr>
    
</body>
</html>