<div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-lg-6 col-xl-3"><!-- col-lg-6 col-xl-3 Begin -->
                
                
                <h4 style="color: white;">Your Links</h4>
                
                <ul><!-- ul Begin -->
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='checkout.php'>Login</a>";
                               
                           }else{
                               
                              echo"<a href='customer/my_account.php?my_orders'>My Account</a>"; 
                               
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
                    <li><a href="terms.php">Terms & Conditions</a></li>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/><strong></strong>
                </ul>
                </p><!-- p Finish -->
                
                <a href="contact.php">Check Our Contact Page</a>
                
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
                    <div class="input-group"><!-- input-group begin -->
                        
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