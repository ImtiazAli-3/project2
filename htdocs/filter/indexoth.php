<?php 

//index.php
    $active='Other';
include('database_connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/png" href="../favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Imtiaz's bangin web</title>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="../font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
<?php 

session_start();

include("../functions/functions.php");

?>
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
                       <a href="../customer_register.php">Register</a>
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
                       
                                echo "<a href='../checkout.php'> Login </a>";

                               }else{

                                echo " <a href='../logout.php'> Log Out </a> ";

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
                   
                   <img src="logo.png" alt="logo" class="hidden-xl" style="width:300px">
                   <img src="logo.png" alt="logo-small" class="visible-xl" style="width:300px;">
                   
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
    <div class="container">
        <div class="row">
        	<br />
        	<h2 align="center">Other</h2>
        	<br />
            <div class="col-xl-3 col-lg-3 col-sm-5 col-xs-12">                				
				<div class="list-group">
					<h3>Price</h3>
					<input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="500" />
                    <p id="price_show">3 - 500</p>
                    <div id="price_range"></div>
                </div>				
                <div class="list-group" style="background:#fff;box-shadow: 0px 1px 5px rgba(0, 0, 0, .5);">
					<h3>Series</h3>
                    <div style="height: 200px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT(manufacturer_title) FROM products WHERE product_status = '1' ORDER BY manufacturer_title DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox"><label>
                        <input type="checkbox" class="common_selector man" value="<?php echo $row['manufacturer_title']; ?>"><?php echo $row['manufacturer_title']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>
				
				<div class="list-group" style="background:#fff;box-shadow: 0px 1px 5px rgba(0, 0, 0, .5);">
					<h3>Gender</h3>
					<?php
                    $query = "
                    SELECT DISTINCT(cat_title) FROM products WHERE product_status = '1' ORDER BY cat_title DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox"><label>
                        <input type="checkbox" class="common_selector cat" value="<?php echo $row['cat_title']; ?>"  > <?php echo $row['cat_title']; ?> </label>
                    </div>
                    <?php
                    }
                    ?>	
                </div>
            </div>

            <div class="col-xl-9 col-lg-9 col-sm-7 col-xs-12">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading"></div>');
        var action = 'fetch_dataoth';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var man = get_filter('man');
        var cat = get_filter('cat');
        $.ajax({
            url:"fetch_dataoth.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, man:man, cat:cat},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:3,
        max:500,
        values:[3, 500],
        step:5,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>
<div id="footer" style="z-index:1"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-lg-6 col-xl-3"><!-- col-lg-6 col-xl-3 Begin -->
                
                
                <h4 style="color: white;">Your Links</h4>
                
                <ul><!-- ul Begin -->
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='../checkout.php'>Login</a>";
                               
                           }else{
                               
                              echo"<a href='../customer/my_account.php?my_orders'>My Account</a>"; 
                               
                           }
                           
                           ?>
                    
                    <li><a href="customer_register.php">Register</a></li>
                    <li><a href="cart.php">Cart</a></li>
                </ul><!-- ul Finish -->
                
                <hr class="hidden-lg hidden-xl hidden-sm">
                
            </div><!-- col-lg-6 col-xl-3 Finish -->

            
            <div class="col-lg-6 col-xl-4"><!-- col-lg-6 col-xl-3 Begin -->
                
                <h4 style="color: white;">Help</h4>
                
                <p><!-- p Start -->
                    <ul>
                    <li><a href="../terms.php">Terms & Conditions</a></li>
                    <a href="../about.php">About Us</a>
                    <br/>
                    <br/>
                    <br/>
                    <br/><strong></strong>
                </ul>
                </p><!-- p Finish -->
                
                <a href="../contact.php">Contact Us</a>
                
                <hr class="hidden-md hidden-xl">
                
            </div><!-- col-lg-6 col-xl-3 Finish -->   
            
            <div class="col-lg-6 col-xl-4">
                
                <h4 style="color: white;">Follow Us On</h4>
                
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <hr>
                </p>
                
            </div>
            <div class="col-lg-6 col-xl-4">
                
                <h4 style="color: white;">Get The News</h4>
                
                <!--<form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=M-devMedia', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post">><!-- form begin -->
                    <div class="input-group" style="z-index:1"><!-- input-group begin -->
                        
                        <input type="text" class="form-control" name="email">
                        
                        <input type="hidden" value="M-devMedia" name="uri"/><input type="hidden" name="loc" value="en_US"/>
                        
                        <span class="input-group-btn"><!-- input-group-btn begin -->
                            
                            <input type="submit" value="Subscribe" class="btn btn-default">
                            
                        </span><!-- input-group-btn Finish -->
                        
                    </div><!-- input-group Finish -->
                </form><!-- form Finish -->    
            </div>             
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->
</body>

</html>
