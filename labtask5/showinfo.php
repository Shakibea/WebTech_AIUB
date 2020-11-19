<?php
require_once 'controller/showInfo.php';
$employer = fetchInfo($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
 <h2>Empolyer Info:</h2>
 <h5>First Name: <?php echo $employer['fname'] ?></h5>
 <h5>Last Name: <?php echo $employer['lname'] ?></h5>
 <h5>Email: <?php echo $employer['email'] ?></h5>
 <h5>Phone: <?php echo $employer['phone'] ?></h5>
 <a href="editAccount.php?id=<?php echo $employer['id'] ?>">Edit</a>&nbsp<a href="contro
ller/deleteAccount.php?id=<?php echo $employer['id'] ?>">Delete</a>
</body>
</html>

