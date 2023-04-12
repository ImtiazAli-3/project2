<?php 

session_start();

include("includes/db.php");
include("functions/functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Imtiaz's bangin web</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">

</head>
<body>
   <div id="top">
       <div class="container">
           <div class="col-xl-6 offer">
               <a href="../customer/my_account.php" class="btn btn-success btn-sm">
                   <?php 
                   if(!isset($_SESSION['customer_email'])){
                       echo "Welcome: Guest";
                   }else{
                       echo "Welcome: " . $_SESSION['customer_email'] . "";
                   }
                   ?>
               </a>
               <a href="../checkout.php"><?php items(); ?> Items | Total Price: <?php total_price(); ?> </a>
           </div>
           <div class="col-xl-6">
               <ul class="menu">
                   <li>
                       <a href="customer_register.php">Register</a>
                   </li>
                   <li>
                       <a href="../customer/my_account.php?my_orders">My Account</a>
                   </li>
                   <li>
                    <a href="#"> Help</a>
                   </li>
                   <li>
                       <a href="../checkout.php">
                           <?php 
                           if(!isset($_SESSION['customer_email'])){
                                echo "<a href='checkout.php'> Login </a>";
                               }else{
                                echo " <a href='logout.php'> Log Out </a> ";
                               }
                           ?>
                       </a>
                   </li>
               </ul>
           </div>
       </div>
   </div>
   <div id="navbar" class="navbar navbar-default">
       <div class="container">
           <div class="navbar-header">
               <a href="index.php" class="navbar-brand home">
                   <img src="logo.png" alt="logo" class="hidden-lg" style="width:300px">
                   <img src="logo.png" alt="logo-small" class="visible-lg" style="width:300px;">
               </a>
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   <span class="sr-only">Toggle Navigation</span>
                   <i class="fa fa-align-justify"></i>
               </button>
           </div>
           <div class="navbar-collapse collapse" id="navigation">
               <div class="padding-nav">
                   <ul class="nav navbar-nav left">
                       <li class="<?php if($active=='Shop') echo"active"; ?>">
                           <a href="../filter/index.php">All</a>
                       </li>
                       <li class="<?php if($active=='Clothes') echo"active"; ?>">
                           <a href="../clothes.php">Clothes</a>
                       </li>
                       <li class="<?php if($active=='Figures') echo"active"; ?>">
                           <a href="../figure.php">Figures</a>
                       </li>
                       <li class="<?php if($active=='Accessories') echo"active"; ?>">
                           <a href="../accessories.php">Accessories</a>
                       </li>
                       <li class="<?php if($active=='Games') echo"active"; ?>">
                           <a href="../games.php">Games</a>
                       </li>                
                       <li class="<?php if($active=='Manga') echo"active"; ?>">
                           <a href="../manga.php">Manga</a>
                       </li> 
                       <li class="<?php if($active=='Home') echo"active"; ?>">
                           <a href="../home.php">Home</a>
                       </li>                        
                       <li class="<?php if($active=='Other') echo"active"; ?>">
                           <a href="../other.php">Other</a>
                       </li>
                       <li class="<?php if($active=='Series') echo"active"; ?>">
                           <a href="../series.php">Series</a>
                       </li>                
                   </ul>
               </div>
               <a href="cart.php" class="btn navbar-btn btn-primary right">
                   <i class="fa fa-shopping-cart"></i>
                   <span><?php items(); ?> Items</span>
               </a>
           </div>
       </div>          
   </div>
    <button onclick="topFunction()" id="topbtn" title="Back to top">Top</button>
<style>
#topbtn
    {
    display: none;
    position: fixed; 
    bottom: 20px; 
    right: 30px; 
    z-index: 99; 
    border: 1px solid white; 
    outline: none; 
    background-color: #9900FF;
    color: white; 
    cursor: pointer; 
    padding: 15px;
    border-radius: 10px; 
    font-size: 18px;
}
</style>
<script>
mybutton = document.getElementById("topbtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 450 || document.documentElement.scrollTop > 450) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.documentElement.scrollTop = 0;
}
    </script>