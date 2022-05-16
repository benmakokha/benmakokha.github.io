<?php include('server.php') ?>



<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin_login</title>
  <link rel= "stylesheet" type= "text/css"  href= "admin_login.css" />
</head>
<body>
<center>
  <div class="container"align="center">

  
  <lable>
LOG IN
</lable>
<form method="POST"action= "admin_login.php">

<br>

<lable>
Email:
</lable >
<br><input type="text"name="Email"placeholder="Enter Email"required>

<br><br>
<lable>
Password:
</lable>
<br>
<input type="password"name="password"placeholder="Password"required>
<br><br>
<input type="submit" name="button"class="Button1"value="LOGIN" />

</form>
</div>
</center>

</body>
</html>