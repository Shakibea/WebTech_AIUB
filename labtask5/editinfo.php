<?php
require_once 'controller/showInfo.php'; 
$emp = fetchInfo($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
 <form action="controller/updateAccount.php?id="<?php echo $emp['id'];?> method="POST" e
nctype="multipart/form-data">
 <div><label class="label" for="fname" > First Name:</label>
 <input value="<?php echo $emp['fname'] ?>" type="text" id="fname" name="fname"></di
v>
 <div><label class="label" for="lname" > Last Name:</label>
 <input value="<?php echo $emp['lname'] ?>" type="text" id="lname" name="lname"></di
v>
 <div><label class="label" for="email" > Email:</label>
 <input value="<?php echo $emp['email'] ?>" type="text" id="email" name="email"></di
v>
 <div><label class="label" for="password" > Password:</label>
 <input value="<?php echo $emp['password'] ?>" type="text" id="password" name="passw
ord"></div>
 <div><label class="label" for="phone" > Phone:</label>
 <input value="<?php echo $emp['phone'] ?>" ype="text" id="phone" name="phone"></div
>
 <input class="submit" type="submit" name="updateBtn" value="Submit">
 <input type="reset"> 
 </form><br>
 </div>
</body>
</html> 