<?php 

    $active='';
    include("includes/header.php");

?>  
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
           <div class="col-xl-12"><!-- col-xl-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li title="Home">
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       About Us
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-xl-12 Finish -->
<div class="col-xl-12 aboutimg">
<div class="col-xl-8"></div>    
<div class="col-xl-4">   
<img src="about.png" title="I don't hurt!">
    </div>
</div>
<style>
    .aboutimg img
    {
        width:500px;
        position: fixed;
        float: right;
        z-index: 2;
    }
    .aboutinfo{
        z-index: 3;
        font-size: 20px;
        font-family: sans-serif;
    }
    .aboutinfo p a
    {
        color: #9900ff;
    }
</style>
<br>
<div class="col-xl-12 col-lg-12 col-sm-12 col-xs-12 aboutinfo" align="center">
    <h1>About Us</h1>
    <p><b>At Anime Market UK, we have a friendly team of 1 person, so don't worry about anything and ask us any questions. Our customer service operates 24 hours a day 7 days a week.<br> Contact us using the contact page, or reach out to us by <a href="#">Instagram</a>, <a href="#">Facebook</a> or <a href="#">Twitter</a></b></p>
</div>    
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>