<!DOCTYPE html>
<html>
<head>
</head>
<body>
	 <form action="controller/createAccount.php" method="POST" enctype="multipart/formdata"> 
	 <div><label class="label" for="fname" > First Name:</label>
	 <input type="text" id="fname" name="fname"></div>
	 <div><label class="label" for="lname" > Last Name:</label>
	 <input type="text" id="lname" name="lname"></div>
	 <div><label class="label" for="email" > Email:</label>
	 <input type="text" id="email" name="email"></div>
	 <div><label class="label" for="password" > Password:</label>
	 <input type="password" id="password" name="password"></div>
	 <div><label class="label" for="phone" > Phone:</label>
	 <input type="text" id="phone" name="phone"></div>
	 <input class="submit" type="submit" name="regBtn" value="Submit">
	 <input type="reset">
	 </form><br>
 </div>
</body>
</html> 