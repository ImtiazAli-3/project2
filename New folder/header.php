<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description">
<meta name=viewport content="width=device-width, initial-scale=1">
<title>Accounts</title>      
<link rel="stylesheet" href="style.css">
<!----------------------PERSONAL STYLESHEETS----------------------->
<!----------------ONLINE STYLESHEETS AND SCRIPTS------------------>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<!----------------ONLINE STYLESHEETS AND SCRIPTS------------------> 
</head>
<button onclick="topFunction()" id="topbtn" title="Back to top">Top</button>
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
<div class="top-nav-bar">
<div class="search-bar">
<a href="index.html"><img src="logo.png" class="logo"></a>
<input type="text" class="form-control" placeholder="Search Store..." style="font-style: italic">    
<span class="input-group-text"><i class="fa fa-search" style="color: #9900FF;font-size: 20px;"></i></span>  
    
</div>
<div class="menu">
<ul>    
<li><a href="#"><i class="fa fa-question-circle"></i></a></li>    
<li><a href="#"><i class="fa fa-heart"></i></a></li>
<li><a href="#"><i class="fa fa-user"></i></a>
<div class="topsubmenu">
<ul>
<li><a href="login2.php">Sign In</a></li>    
<li><a href="signup.php">Create an Account</a></li>    
</ul>    
</div>    
</li>  
<li style="background-color: black"><a href="#"><i class="fa fa-shopping-cart" style="color: #9900FF"></i></a></li>  
</ul>
</div>    
</div> 
<!---------------------DEFAULT MENU------------------------------->
<div class="menueasyclose">  
    <div class="wrapper">
        <nav id="sidemenubar">
            <div id="close">
                <i class="fa fa-arrow-left"></i>
            </div>
            <div class="sidemenubar-header">
                <h3><a href="index.html">Imtiaz's <br>Website</a></h3>
            </div>
            <ul class="list-unstyled components">
                <p>MENU</p>
                <li class="active">
                    <a href="#clothesSubmenu" data-toggle="collapse" aria-expanded="false">Clothing</a>
                    <ul class="collapse list-unstyled" id="clothesSubmenu">
                        <li>
                            <a href="#">Tops</a>
                        </li>
                        <li>
                            <a href="#">Hoodies</a>
                        </li>
                        <li>
                            <a href="#">Cosplay</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#accSubmenu" data-toggle="collapse" aria-expanded="false">Accessories</a>
                    <ul class="collapse list-unstyled" id="accSubmenu">
                        <li>
                            <a href="#">Rings</a>
                        </li>
                        <li>
                            <a href="#">Bracelets</a>
                        </li>
                        <li>
                            <a href="#">Necklaces</a>
                        </li>                        
                        <li>
                            <a href="#">Keyrings</a>
                        </li>                        
                        <li>
                            <a href="#">Hats</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#figuresSubmenu" data-toggle="collapse" aria-expanded="false">Figures</a>
                    <ul class="collapse list-unstyled" id="figuresSubmenu">
                        <li>
                            <a href="#">Scale Figures</a>
                        </li>
                        <li>
                            <a href="#">Plush</a>
                        </li>
                        <li>
                            <a href="#">Chibi & mini figures</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#artSubmenu" data-toggle="collapse" aria-expanded="false">Art Prints</a>
                    <ul class="collapse list-unstyled" id="artSubmenu">
                        <li>
                            <a href="#">Posters</a>
                        </li>
                        <li>
                            <a href="#">Stickers</a>
                        </li>
                        <li>
                            <a href="#">Pictures & canvases</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#bedSubmenu" data-toggle="collapse" aria-expanded="false">Bedding</a>
                    <ul class="collapse list-unstyled" id="bedSubmenu">
                        <li>
                            <a href="#">Duvet Covers</a>
                        </li>
                        <li>
                            <a href="#">Pillows</a>
                        </li>
                        <li>
                            <a href="#">Sets</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#seriesSubmenu" data-toggle="collapse" aria-expanded="false">Series</a>
                    <ul class="collapse list-unstyled" id="seriesSubmenu">
                        <li>
                            <a href="seriesall.html">View All</a>
                        </li>
                        <li>
                            <a href="#aSubmenu" data-toggle="collapse" aria-expanded="false">A-D</a>
                            <ul class="collapse list-unstyled" id="aSubmenu" style="margin-left:20px;background-color: #9900FF; font-size:13px;">
                            <li>
                                <a href="#">Attack on Titans</a>
                            </li>
                            <li>
                                <a href="#">Black Butler</a>
                            </li> 
                            <li>
                                <a href="blackclover.html">Black Clover</a>
                            </li> 
                            <li>
                                <a href="#">Bleach</a>
                            </li>    
                            <li>
                                <a href="#">Code Geass</a>
                            </li>                            
                            <li>
                                <a href="#">Dan Machi</a>
                            </li>                            
                            <li>
                                <a href="#">Darling in the Franxx</a>
                            </li>                              
                            <li>
                                <a href="#">Date a Live</a>
                            </li>                            
                            <li>
                                <a href="#">Deathnote</a>
                            </li>                             
                            <li>
                                <a href="#">Demon Slayer</a>
                            </li>                             
                            <li>
                                <a href="#">Dragonball Z</a>
                            </li>                                
                            </ul>
                        </li>
                        <li>
                            <a href="#eSubmenu" data-toggle="collapse" aria-expanded="false">E-L</a>
                            <ul class="collapse list-unstyled" id="eSubmenu" style="margin-left:20px;background-color: #9900FF; font-size:13px;">
                            <li>
                                <a href="#">Fairy Tail</a>
                            </li>
                            <li>
                                <a href="#">Fire Force</a>
                            </li> 
                            <li>
                                <a href="#">Fullmetal Alchemist</a>
                            </li> 
                            <li>
                                <a href="#">Gate</a>
                            </li>    
                            <li>
                                <a href="#">Hataraku Maou-Sama</a>
                            </li>                            
                            <li>
                                <a href="#">High School DxD</a>
                            </li>                            
                            <li>
                                <a href="#">High School of thr Dead</a>
                            </li>                              
                            <li>
                                <a href="#">Hunter X Hunter</a>
                            </li>                            
                            <li>
                                <a href="#">Konosuba</a>
                            </li>                             
                            <li>
                                <a href="#">Log Horizon</a>
                            </li>                                                     </ul>
                        </li>
                        <li>
                            <a href="#mSubmenu" data-toggle="collapse" aria-expanded="false">M-S</a>
                            <ul class="collapse list-unstyled" id="mSubmenu" style="margin-left:20px;background-color: #9900FF; font-size:13px;">
                            <li>
                                <a href="#">Magi</a>
                            </li>
                            <li>
                                <a href="#">Mob Psycho 100</a>
                            </li> 
                            <li>
                                <a href="#">My Hero Academia</a>
                            </li> 
                            <li>
                                <a href="#">No Game No Life</a>
                            </li>    
                            <li>
                                <a href="#">Noragami</a>
                            </li>                            
                            <li>
                                <a href="#">One Piece</a>
                            </li>                            
                            <li>
                                <a href="#">One Piece Man</a>
                            </li>                              
                            <li>
                                <a href="#">Re:Zero</a>
                            </li>                            
                            <li>
                                <a href="#">Re:Life</a>
                            </li>                             
                            <li>
                                <a href="#">Shokugeki no Soma</a>
                            </li>                             
                            <li>
                                <a href="#">Sword Art Online</a>
                            </li>                                
                            </ul>
                        </li>
                        <li>
                            <a href="#tSubmenu" data-toggle="collapse" aria-expanded="false">T-Z</a>
                            <ul class="collapse list-unstyled" id="tSubmenu" style="margin-left:20px;background-color: #9900FF; font-size:13px;">
                            <li>
                                <a href="#">Terra Formars</a>
                            </li>
                            <li>
                                <a href="#">That Time I got reincarnated as a Slime</a>
                            </li> 
                            <li>
                                <a href="#">The Asterisk War</a>
                            </li> 
                            <li>
                                <a href="#">The Rising of the Shield Hero</a>
                            </li>    
                            <li>
                                <a href="#">The Seven Deadly Sins</a>
                            </li>                            
                            <li>
                                <a href="#">Tokyo Ghouls</a>
                            </li>                                                            
                            </ul>
                        </li>                        
                    </ul>
                </li>
                <li class="active">
                    <a href="#otherSubmenu" data-toggle="collapse" aria-expanded="false">Other</a>
                    <ul class="collapse list-unstyled" id="otherSubmenu">
                        <li>
                            <a href="#">Games</a>
                        </li>
                        <li>
                            <a href="#">Bags</a>
                        </li>
                        <li>
                            <a href="#">Mousepads</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#saleSubmenu" data-toggle="collapse" aria-expanded="false">Sale</a>
                    <ul class="collapse list-unstyled" id="saleSubmenu">
                        <li>
                            <a href="sale.html">View All</a>
                        </li>
                        <li>
                            <a href="#">Clothes</a>
                        </li>
                        <li>
                            <a href="#">Figures</a>
                        </li>
                    </ul>
                </li> 
                <img src="menu1.jpg" style="width: 248px; height: auto; margin-left: 1px;border-radius: 24px;border: 1px solid #fff;">               
            </ul>
        </nav>
        <div id="content"> 
            <nav class="navbar">
                <div class="container" style="background-color: #9900FF;margin-top: 5px;margin-left: -30px;width:auto;height: auto;border-radius: 12px">
                    <button type="button" id="sidemenubarCollapse" class="btn btn-info" style="background-color: #9900FF;border: none">
                        <i class="fa fa-bars"></i>
                        <span>Menu</span>
                    </button>
                </div>
            </nav>
        </div>
    </div>
    <div class="overlay"></div>
    <script>
        $(document).ready(function () {
            $("#sidemenubar").mCustomScrollbar({
                theme: "minimal"
            });
            $('#close, .overlay').on('click', function () {
                $('#sidemenubar').removeClass('active');
                $('.overlay').removeClass('active');
            });
            $('#sidemenubarCollapse').on('click', function () {
                $('#sidemenubar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>  
<br></div>     
<header>
    <div class="loginform">       
<?php
if (isset($_SESSION['userid'])) {
    echo '<br><br><form action="logout.php" method="post">
        <button type="submit" name="logout-submit" id="logbutton1">Logout</button>   
        </form>';
}
else {
    echo '<p class="logintitle"><u>Login</u></p>
        <form action="login2.php" method="post" id="logbutton">
        <input type="text" name="mailuid" placeholder="Email or Username" id="clicks1">
        <input type="password" name="pwd" placeholder="Password" id="clicks2">
        <button type="submit" name="login-submit" id="loginbutton">Login</button>
        </form>
        <div class="signupbtn">
        New?<a href="signup.php"> Signup here</a>
        </div>';
}
?>       
<style>
    .logintitle{
        text-align: center;
        font-size: 24px;
        font-weight: 500;
        font-weight: bold;
    }
    #logbutton1,#logbutton{
        margin-left: 40%;
        margin-right: 40%;      
    }        
    #logbutton1{
        border: 2px solid #9900FF;
        border-radius: 16px;
        background-color: white;
        width: 70px;
        text-align: center;
    }
    #logbutton1:hover{
        background-color: #66ff00;
        border: 2px solid #66ff00;
    }
    #clicks1,#clicks2{
        border: 2px solid #9900FF;
        border-radius: 16px;
        width: 260px;
        height: auto;
        font-size: 20px;
        text-align: center;
        display: inline-block;
    }
    #clicks1:focus,#clicks2:focus{
        border: 2px solid #66ff00;
    }
    #clicks2{
        margin-top: 10px;
    }
    #loginbutton{
        border: 2px solid #9900FF;
        background-color: white;
        border-radius: 16px;
        width: 70px;
        text-align: center;
        margin-top: 10px;
    }
    #loginbutton:hover{
        background-color: #66ff00;
        border: 2px solid #66ff00;
    }
    .signupbtn{
        text-align: center;
    }
    
</style>        
    </div>
</header>    
 