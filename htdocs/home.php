<?php
    $active='Home';
    include("includes/header.php");
?>

   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-xl-12"><!-- col-xl-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Home
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-xl-12 Finish -->
           <div class="col-xl-12"><!-- col-xl-9 Begin -->
    <div class="title-box" style="width:auto">
    <h2 style="margin:auto">Household Items</h2>
    </div>
               <div id="products" class="row col-xl-12 col-lg-12"><!-- row Begin -->

               <?php getHome(); ?>
               
               </div><!-- row Finish -->
               
           </div><!-- col-xl-9 Finish -->
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>           