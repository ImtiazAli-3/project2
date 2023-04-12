<?php 

    $active='';
    include("includes/header.php");

?>  
   <div id="slider">
       
       <div>
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel">
               
               <ol class="carousel-indicators">
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol>
               
               <div class="carousel-inner">
                  
                  <?php 
                   
                   $get_slides = "select * from slider LIMIT 0,1";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       $slide_url = $row_slides['slide_url'];
                       
                       echo "
                       
                       <div class='item active'>
                       
                           <a href='$slide_url'>

                                <img src='admin_area/slides_images/$slide_image'>

                           </a>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   $get_slides = "select * from slider LIMIT 1,4";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       $slide_url = $row_slides['slide_url'];
                       
                       echo "
                       
                       <div class='item'>
                       
                           <a href='$slide_url'>

                                <img src='admin_area/slides_images/$slide_image'>

                           </a>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   ?>
                   
               </div>
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a>
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next">
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a>
               
           </div>
           
       </div>
       
   </div>
<div class="col-xl-12 home1">
<div class="col-xl-6 col-lg-6 col-sm-6 col-xs-12"><a href="../filter/indexclo.php"><img src="admin_area/slides_images/home1.png"></a></div>
<div class="col-xl-6 col-lg-6 col-sm-6 col-xs-12"><a href="../filter/indexfig.php"><img src="admin_area/slides_images/home2.png"></a></div>
</div>
<div class="col-xl-12 col-lg-12 col-sm-12 col-xs-12 home2" align="center"><a href="../filter/indexser.php"><img src="admin_area/slides_images/home5.png"></a></div>
<div class="col-xl-12 home1">
<div class="col-xl-6 col-lg-6 col-sm-6 col-xs-12"><a href="../filter/indexhom.php"><img src="admin_area/slides_images/home3.png"></a></div>
<div class="col-xl-6 col-lg-6 col-sm-6 col-xs-12"><a href="../filter/indexacc.php"><img src="admin_area/slides_images/home4.png"></a></div>    
</div>





<div class="container"></div>
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>