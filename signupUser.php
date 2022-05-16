<?php





























?>
























<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User sign up</title>
    <link rel="stylesheet" href="user.css"type="text/css">
    
</head>
<body>
<strong><h1 align="center"class="color1">TECHNOMOBIZ</h1></strong>
<center>

    <form class="bg3">
        <lable>
            CREATE USER'S ACCOUNT
</lable>
<BR>
<BR>
        <lable>
            First Name:
</lable><br>
<input type="text" name="fname"placeholder="First Name"required>
<br>
<lable>
    Last Name:
</lable><br>
<input type="text"name="lname"placeholder="Last name">
<br>
        <lable>
            Email:
</lable><br>

<input type="text" name="email"id="mail"placeholder="Enter email"required><br>
<lable>
    Password:
</lable><br>
<input type="password"name="password"required placeholder="Password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br>
<lable>
    Confirm Password:
</lable>
<br>
<input type="password" name="password"required placeholder="Confirm Password">
<br>
<br>
<input type="submit" name="submit" class="button" value="login" />



</form>
<br>


</center>


<div class="footer">

hello guys this is my footer come lets checkout




</div>

    
</body>
</html>