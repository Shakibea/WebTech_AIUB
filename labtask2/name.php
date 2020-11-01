<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      p {
        color: red;
      }
    </style>
</head>
<body>

<?php 

// define variables and set to empty values
$name =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
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
    <legend>Name:</legend>
    <div>
    <?php 
      if($_POST['submit'] == "submit" ){

        if(str_word_count($name) <= 1){ ?>

    <p>atleast two words</p>
    <?php      
        }
        if(empty($name)){ ?>
          <p>can't be null</p> 
          
          <?php
        }

        if(preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["name"]) === 0){ ?>
        
        <p>must start with Upper case letter</p>

<?php
        }

       } ?>
        


<input type="text" name="name" id="name" value=<?php $name ?>>
    
    </div>
    <hr>
    <input type="submit" name="submit" value="submit"> <br>

    
  </fieldset>

</form>





</body>
</html>