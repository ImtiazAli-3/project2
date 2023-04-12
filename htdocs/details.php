<?php 

session_start();

$active='';

include("includes/db.php");
include("functions/functions.php");

?>

<?php 

if(isset($_GET['pro_id'])){
    
    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from products where product_id='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);
    
    $row_product = mysqli_fetch_array($run_product);
    
    $p_cat_id = $row_product['p_cat_id'];
    
    $manufacturer_id = $row_product['manufacturer_id'];
    
    $pro_title = $row_product['product_title'];
    
    $pro_price = $row_product['product_price'];
    
    $pro_desc = $row_product['product_desc'];
    
    $pro_img1 = $row_product['product_img1'];
    
    $pro_img2 = $row_product['product_img2'];
    
    $pro_img3 = $row_product['product_img3'];
    
    $pro_img4 = $row_product['product_img4'];
    
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];
    
    $get_man = "select * from manufacturers where manufacturer_id='$manufacturer_id'";
    
    $run_man = mysqli_query($con,$get_man);
    
    $row_man = mysqli_fetch_array($run_man);
    
    $manufacturer_title = $row_man['manufacturer_title'];
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Imtiaz's Bangin web</title>
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
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
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
                           <a href="../shop.php">All</a>
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
           <div class="col-xl-12"><!-- col-xl-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Shop
                   </li>
                   
                   <li>
                       <?php echo $p_cat_title; ?>
                   </li>
                   <li> <?php echo $pro_title; ?> </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-xl-12 Finish -->
           
           <div class="col-xl-12"><!-- col-xl-9 Begin -->
            <div class="row col-xl-2 col-lg-2 col-sm-3 col-xs-5" id="thumbs">
                           <div><!-- col-lg-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="0"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 1" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-lg-4 Finish -->
                           
                           <div><!-- col-lg-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="1"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 2" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-lg-4 Finish -->
                           
                           <div><!-- col-lg-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="2"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product 3" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-lg-4 Finish -->
                           <div><!-- col-lg-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="3"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img4; ?>" alt="product 4" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-lg-4 Finish -->
                           
                       </div><!-- row Finish -->   
               <div id="productMain" class="row"><!-- row Begin -->
                   <div class="col-xl-5 col-lg-5 col-sm-9 col-xs-7"><!-- col-lg-6 Begin -->
                       <div id="mainImage"><!-- #mainImage Begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
                               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                                   <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                                   <li data-target="#myCarousel" data-slide-to="1"></li>
                                   <li data-target="#myCarousel" data-slide-to="2"></li>
                                   <li data-target="#myCarousel" data-slide-to="3"></li>
                               </ol><!-- carousel-indicators Finish -->
                               
                               <div class="carousel-inner">
                                   <div class="item active">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product 3-a"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product 3-b"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product 3-c"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img4; ?>" alt="Product 3-d"></center>
                                   </div>
                               </div>
                               
                               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- left carousel-control Finish -->
                               
                               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-right"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- right carousel-control Finish -->
                               
                           </div><!-- carousel slide Finish -->
                       </div><!-- mainImage Finish -->
                   </div><!-- col-lg-6 Finish -->
                   
                   <div class="col-xl-5 col-lg-5 col-sm-12 col-xs-12"><!-- col-lg-6 Begin -->
                       <div class="box"><!-- box Begin -->
                           <h1> <?php echo $pro_title; ?> </h1>
                            <p style="font-size:25px;">£ <?php echo $pro_price; ?></p>                           
                           
                           <?php add_cart(); ?>
                           
                           <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                               <div class="form-group"><!-- form-group Begin -->
                                   <label for="" class="col-xl-3">Quantity</label>
                                   
                                   <div class="col-xl-3"><!-- col-xl-7 Begin -->
                                          <select name="product_qty" id="" class="form-control"><!-- select Begin -->
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           </select><!-- select Finish -->
                                   
                                    </div><!-- col-xl-7 Finish -->
                                   
                               </div><!-- form-group Finish -->
                               
                               <div class="form-group"><!-- form-group Begin -->
                                   <label class="col-xl-3">Size <br>(If Needed)</label>
                                   
                                   <div class="col-xl-3"><!-- col-xl-7 Begin -->
                                       
                                       <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Please pick a size')"><!-- form-control Begin -->
                                          
                                           <option>N/A</option>
                                           <option>XS</option>
                                           <option>S</option>
                                           <option>M</option>
                                           <option>L</option>
                                           <option>XL</option>
                                           
                                       </select><!-- form-control Finish -->
                                       
                                   </div><!-- col-xl-7 Finish -->
                               </div><!-- form-group Finish -->
                            
                               
                               <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>
                               
                           </form><!-- form-horizontal Finish -->
                           
                       </div><!-- box Finish -->
                                      
               <div class="box" id="details"><!-- box Begin -->
                       
                       <h4 style="font-weight: bold;">Product Details</h4>
                   
                   <p>
                       
                       <?php echo $pro_desc; ?>
                       <br>
                        Product ID: <?php echo $product_id; ?><br>
                        Series: <?php echo $manufacturer_title; ?><br>
                       <a href="terms.php" style="color:black;font-size:15px"><b>>Delivery Info<</b></a>
                   </p>
                   
   
                       
                       <hr>
                   
               </div><!-- box Finish -->
                                       
               </div><!-- row Finish -->
               </div><!-- col-lg-6 Finish -->
               <br><br><br><br><br>
               <hr>
               <h1 style="font-size:25px;font-weight:bold 500;font-family"><b>YOU MAY ALSO LIKE</b></h1>
               <div id="row same-height-row"><!-- #row same-heigh-row Begin -->
                   
                   <?php 
                   
                    $get_products = "select * from products order by rand() LIMIT 0,6";
                   
                    $run_products = mysqli_query($con,$get_products);
                   
                   while($row_products=mysqli_fetch_array($run_products)){
                       
                       $pro_id = $row_products['product_id'];
                       
                       $pro_title = $row_products['product_title'];
                       
                       $pro_img1 = $row_products['product_img1'];
                       
                       $pro_price = $row_products['product_price'];
                       
                       echo "
                       
                        <div class='col-xl-2 col-lg-2 col-sm-4 col-xs-5 '>
                        
                            <div class='product same-height' style='height:360px'>
                            
                                <a href='details.php?pro_id=$pro_id'>
                                
                                    <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                                
                                </a>
                                
                                <div class='text'>
                                
                                    <h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a> </h3>
                                    
                                    <p class='price'> £ $pro_price </p>
                                
                                </div>
                            
                            </div>
                        
                        </div>
                       
                       ";
                       
                   }
                   
                   ?>
                   
               </div><!-- #row same-heigh-row Finish -->
               
           </div><!-- col-xl-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
