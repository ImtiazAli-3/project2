<?php 

session_start();

if(!isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
    
}else{

include("includes/db.php");
include("functions/functions.php");

?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Imtiaz's Bangin web</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png">    
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
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
                       <a href="checkout.php">
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='checkout.php'> Login </a>";

                               }else{

                                echo " <a href='logout.php'> Log Out </a> ";

                               }
                           
                           ?>
                           
                       </a>
                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-xl-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin --> 
               
               <a href="../index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="logo.png" alt="logo" class="hidden-lg" style="width:300px">
                   <img src="logo.png" alt="logo-small" class="visible-lg" style="width:300px;">
                   
               </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       <li class="<?php if($active=='Shop') echo"active"; ?>">
                           <a href="../filter/index.php">All</a>
                       </li>
                       <li class="<?php if($active=='Clothes') echo"active"; ?>">
                           <a href="../filter/indexclo.php">Clothes</a>
                       </li>
                       <li class="<?php if($active=='Figures') echo"active"; ?>">
                           <a href="../filter/indexfig.php">Figures</a>
                       </li>
                       <li class="<?php if($active=='Accessories') echo"active"; ?>">
                           <a href="../filter/indexacc.php">Accessories</a>
                       </li>
                       <li class="<?php if($active=='Games') echo"active"; ?>">
                           <a href="../filter/indexgam.php">Games</a>
                       </li>                
                       <li class="<?php if($active=='Manga') echo"active"; ?>">
                           <a href="../filter/indexman.php">Manga</a>
                       </li> 
                       <li class="<?php if($active=='Home') echo"active"; ?>">
                           <a href="../filter/indexhom.php">Home</a>
                       </li>                        
                       <li class="<?php if($active=='Other') echo"active"; ?>">
                           <a href="../filter/indexoth.php">Other</a>
                       </li>
                       <li class="<?php if($active=='Series') echo"active"; ?>">
                           <a href="../filter/indexser.php">Series</a>
                       </li>                
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span><?php items(); ?> Items</span>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
                    
   </div><!-- navbar navbar-default Finish -->
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
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-lg-12"><!-- col-lg-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       My Account
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-lg-12 Finish -->
           
           <div class="col-lg-3"><!-- col-lg-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-lg-3 Finish -->
           
           <div class="col-lg-9"><!-- col-lg-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <?php
                   
                   if (isset($_GET['my_orders'])){
                       include("my_orders.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['pay_offline'])){
                       include("pay_offline.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['edit_account'])){
                       include("edit_account.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['change_pass'])){
                       include("change_pass.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['delete_account'])){
                       include("delete_account.php");
                   }
                   
                   ?>
                   
               </div><!-- box Finish -->
               
           </div><!-- col-lg-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
<?php } ?>