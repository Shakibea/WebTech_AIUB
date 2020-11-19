<?php
require_once '../model.php';
$var = "";
if (isset($_POST['regBtn']))
{
 $data['fname'] = $_POST['fname'];
 $data['lname'] = $_POST['lname'];
 $data['email'] = $_POST['email'];
 $data['password'] = $_POST['password'];
 $data['phone'] = $_POST["phone"];
 if (addAccount($data))
 {
 $var = 'Successfully Registered!!';
 }
}
else 
{
 $var = 'You are not allowed to access this page.';
}
?>
<html>
 <body>
 <?php
 include '../head34.php';
 ?>
 <h3><?php echo $var ?></h3>
 </body>
</html> 
