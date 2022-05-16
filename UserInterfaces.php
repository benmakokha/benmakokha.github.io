<?php

if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError= $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)){

        if($fileError === 0){
            #

            if($fileSize < 200000){

                $fileDestination = 'electronicUploads/'.$fileActualExt;

                move_uploaded_file($fileTmpName, $fileDestination);
                echo($fileDestination);

            }

            else{
                echo("Your File Is Too Big!");
            }


        }
        else{
            echo("There was an error in uploading your file!");
        }


    }
    else{
    echo("you can not upload files of this type!");

    }


}
























?>






<!DOCTYPE html>
<html lang="en" id= "loadEveryTime">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
    <link rel = "stylesheet" type= "text/css" href = "user_inter.css">
    <script src = "https://kit.fontawesome.com/a076d05399.js"></script>



</head>



<body>
<span>

<div class="dropdown" id = "droping-positions">
<button class="dropbtn">Post product</botton>
<div class="dropdown-content">
<a href="user_uploads.php">Upload product</a>
<a href="user_uploads.php">View  post</a>
<a href="user_uploads.php">Delete post</a>

</div>
</div>
<div class= "dropdown">
<button class= "dropbtn">View cart</button>
<div class= "dropdown-content">
<a href= "#name1">View added items</a>
<a href= "#name2">Drop item(s)</a>
<a href= "#name3">Clear Cart</a>
</div>
</div>

<div class= "dropdown">
<button class= "dropbtn">View products</button>
<div class= "dropdown-content">
<a href= "#country1">View currently posted</a>
<a href= "#countr2"> View all</a>
<a href= "#country3">Rate website</a>
</div>
</div>
</span>

<div class= "navbar">
<a href= "index.php"target="_self">Home</a>
</div>

<div class= "myheight">

<h1 style = "top:0%;"> ONLINE AUCTION SYSTEM </h1>
</div>
<h3> WE ENABLE YOU ADVERTISE YOUR PRODUCTS AND TRANSACT ONLINE </h3>

<br>
<h3>
<marquee  behavior="alternate"> <a><font color="RED">WELCOME ALL! LETS TALK BUSINESS</font></a></marquee>
</h3>

                <div class= "usebody">
                    <div class = glow>
                   <p>    
                        WE BUY AND SELL HERE TO ANYONE, CREATE ACCOUNT FOR NEW MEMBERS OR LOGIN AND EXPLORE THE WORLD OF BUSINESS HERE

</p>
</div>
</div>
<div class= "item1" id = "liks">
  <img src="pic/laptop-image.jpg"id="radius" alt="David Munyoki" width = " " height = " "> 

</div>


<div class = "item2">



<img src = "pic/machines.jpg" alt = "mobile phone" width = " " height = " " >



</div>


<div class = "item3">



<img src = "pic/coffee-cups.jpg" alt = "mobile phone"  >



</div>


<div class = "item4">
    

<img src = "pic/phones.jpg" alt = "mobile phone" width = " " height = " " >


</div>

<div class="item3" id = "display-image">

<p>this is my pic </p>

</div>

<div class = "mylinks">
        <a href = "index.php" target = "_blank" title = "Online Auction System">admin login? </a>
            <br>
        <a href = "index.php" target= "_blank" title = "Online Auction System">click here to create account </a>
        <br>
</div>

<div class="wrapper">

<div class="search-input" class = "active">

<input type = "text" placeholder = "Type to Search products...">
<div class="active" class = "outocome-box">
<div class="autocome-box">

<li>search form </li>

<li>search form </li>

<li>search form </li>

<li>search form </li>

<li>search form </li>

</div>
</div>
<div class="icon"> <i class = "fas fa-search"></i></div>


</div>
</div>


<div class = "myfooter">

<p style = "padding-left:130px;">

  <br> 
Developper Ben-Alwanga&Levis Chisira, c- Tel +25468743827   Nairobi. <span> Email-- bensonmakokha25@gmail.com& levischisira@gmail.com</span>

</p>

</div>



<script src = "javascript.js">

    </script>
</body>
</html>