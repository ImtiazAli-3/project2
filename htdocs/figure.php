<?php
    $active='Figures';
    include("includes/header.php");
?>

   
   <div id="content">
       <div class="container">
           <div class="col-xl-12">
               
               <ul class="breadcrumb">
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Figures
                   </li>
               </ul>
               
           </div>
           <div class="col-xl-12">
    <div class="title-box" style="width:auto">
    <h2 style="margin:auto">Figures</h2>
    </div>
               <div id="products" class="row col-xl-12 col-lg-12">

               <?php getFigures(); ?>
               
               </div>
               
           </div>
       </div>
   </div>
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>           