<?php 

$db = mysqli_connect("localhost","root","","ecom_store");

/// begin getRealIpUser functions ///

function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
}

/// finish getRealIpUser functions ///

/// begin add_cart functions ///

function add_cart(){
    
    global $db;
    
    if(isset($_GET['add_cart'])){
        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['add_cart'];
        
        $product_qty = $_POST['product_qty'];
        
        $product_size = $_POST['product_size'];
        
        $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
        
        $run_check = mysqli_query($db,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            
            echo "<script>alert('This product has already added in cart')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            
        }else{
            
            $query = "insert into cart (p_id,ip_add,qty,size) values ('$p_id','$ip_add','$product_qty','$product_size')";
            
            $run_query = mysqli_query($db,$query);
            
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            
        }
        
    }
    
}

/// finish add_cart functions ///

/// begin getPro functions ///

function getPro(){
    
    global $db;
    
    $get_products = "select * from products order by 1 DESC LIMIT 0,6";
    
    $run_products = mysqli_query($db,$get_products);
    
    while($row_products=mysqli_fetch_array($run_products)){
        
        $pro_id = $row_products['product_id'];
        
        $pro_title = $row_products['product_title'];
        
        $pro_price = $row_products['product_price'];
        
        $pro_img1 = $row_products['product_img1'];
        
        echo "
        
        <div class='col-xl-2 col-lg-3 col-sm-4 col-xs-5'>
        
            <div class='product' style='height:425px;'>
            
                <a href='details.php?pro_id=$pro_id'>
                
                    <img class='img-responsive' src='admin_area/product_images/$pro_img1' title='$pro_title'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?pro_id=$pro_id'>

                            $pro_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                        £ $pro_price
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                            View Details

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
        
        ";
        
    }
    
}

/// finish getPro functions ///

/// begin getPCats functions ///

function getPCats(){
    
    global $db;
    
    $get_p_cats = "select * from product_categories";
    
    $run_p_cats = mysqli_query($db,$get_p_cats);
    
    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
        
        $p_cat_id = $row_p_cats['p_cat_id'];
        
        $p_cat_title = $row_p_cats['p_cat_title'];
        
        echo "
        
            <li>
            
                <a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish getPCats functions ///

/// begin getCats functions ///

function getCats(){
    
    global $db;
    
    $get_cats = "select * from categories";
    
    $run_cats = mysqli_query($db,$get_cats);
    
    while($row_cats=mysqli_fetch_array($run_cats)){
        
        $cat_id = $row_cats['cat_id'];
        
        $cat_title = $row_cats['cat_title'];
        
        echo "
        
            <li>
            
                <a href='shop.php?cat=$cat_id'> $cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish getCats functions ///

/// finish getRealIpUser functions ///

function items(){
    
    global $db;
    
    $ip_add = getRealIpUser();
    
    $get_items = "select * from cart where ip_add='$ip_add'";
    
    $run_items = mysqli_query($db,$get_items);
    
    $count_items = mysqli_num_rows($run_items);
    
    echo $count_items;
    
}

/// finish getRealIpUser functions ///

/// begin total_price functions ///

function total_price(){
    
    global $db;
    
    $ip_add = getRealIpUser();
    
    $total = 0;
    
    $select_cart = "select * from cart where ip_add='$ip_add'";
    
    $run_cart = mysqli_query($db,$select_cart);
    
    while($record=mysqli_fetch_array($run_cart)){
        
        $pro_id = $record['p_id'];
        
        $pro_qty = $record['qty'];
        
        $get_price = "select * from products where product_id='$pro_id'";
        
        $run_price = mysqli_query($db,$get_price);
        
        while($row_price=mysqli_fetch_array($run_price)){
            
            $sub_total = $row_price['product_price']*$pro_qty;
            
            $total += $sub_total;
            
        }
        
    }
    
    echo "£" . $total;
    
}

/// finish total_price functions ///

/// Begin getProducts(); functions ///

function getProducts(){

    global $db;
    $aWhere = array();

    /// Begin for Manufacturer ///
    
    if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

        foreach($_REQUEST['man'] as $sKey=>$sVal){

            if((int)$sVal!=0){

                $aWhere[] = 'manufacturer_id='.(int)$sVal;

            }

        }

    }

    /// Finish for Manufacturer ///  

    $per_page=16;

    if(isset($_GET['page'])){

        $page = $_GET['page'];

    }else{
        $page=1;
    }

    $start_from = ($page-1) * $per_page;
    $sLimit = " order by 1 DESC LIMIT $start_from,$per_page";
    $sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;
    $get_products = "select * from products ".$sWhere;
    $run_products = mysqli_query($db,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){

        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];

        echo "
        
            <div class='col-xl-3 col-lg-3 col-sm-6 col-xs-5 '>

                <div style='height:375px;' class='product'>

                    <a href='details.php?pro_id=$pro_id'>

                        <img class='img-responsive' src='admin_area/product_images/$pro_img1' title='$pro_title'>

                    </a>

                    <div class='text'>
                        <a href='details.php?pro_id=$pro_id'>
                        <h3 style='color:black;'> $pro_title </h3>
                        </a>
                        <p class='price'>£ $pro_price </p>

                    </div>

                </div>

            </div>
        
        ";

    }

}

/// finish getProducts(); functions ///

/// begin getPaginator(); functions ///

function getPaginator(){

    global $db;

    $per_page=16;
    $aWhere = array();
    $aPath = '';

    /// Begin for Manufacturer ///
    
    if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

        foreach($_REQUEST['man'] as $sKey=>$sVal){

            if((int)$sVal!=0){

                $aWhere[] = 'manufacturer_id='.(int)$sVal;
                $aPath .= 'man[]='.(int)$sVal.'&';

            }

        }

    }

    /// Finish for Manufacturer ///    
    
    $sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'');
    $query = "select * from products".$sWhere;
    $result = mysqli_query($db,$query);
    $total_records = mysqli_num_rows($result);
    $total_pages = ceil($total_records / $per_page);

    echo "<li> <a href='shop.php?page=1";
    if(!empty($aPath)){

        echo "&".$aPath;

    }

    echo "'>".'<<'."</a></li>";

    for($i=1; $i<=$total_pages; $i++){

        echo "<li> <a href='shop.php?page=".$i.(!empty($aPath)?'&'.$aPath:'')."'>".$i."</a></li>";

    };

    echo "<li> <a href='shop.php?page=$total_pages";

    if(!empty($aPath)){

        echo "&".$aPath;

    }

    echo "'>".'>>'."</a></li>";

}

/// finish getPaginator(); functions ///


function getFigures(){

    global $db;
    $aWhere = array();
    
$per_page=40;

    if(isset($_GET['page'])){

        $page = $_GET['page'];

    }else{
        $page=1;
    }

    $start_from = ($page-1) * $per_page;
    $sLimit = " order by 1 DESC LIMIT $start_from,$per_page";
    $sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;
    $get_products = "select * from products where p_cat_id='10' ".$sWhere;
    $run_products = mysqli_query($db,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){

        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];

        echo "
        
            <div class='col-xl-2 col-lg-2 col-sm-4 col-xs-5'>

                <div class='product' style='height:360px'>

                    <a href='details.php?pro_id=$pro_id'>

                        <img class='img-responsive' src='admin_area/product_images/$pro_img1' title='$pro_title'>

                    </a>

                    <div class='text'>
                        <a href='details.php?pro_id=$pro_id'>
                        <h3 style='color:black;'> $pro_title </h3>
                        </a>
                    <p class='price'>£ $pro_price </p>
                    </div>

                </div>

            </div>
        
        ";

    }

}

function getClothes(){

    global $db;
    $aWhere = array();
    
$per_page=40;

    if(isset($_GET['page'])){

        $page = $_GET['page'];

    }else{
        $page=1;
    }

    $start_from = ($page-1) * $per_page;
    $sLimit = " order by 1 DESC LIMIT $start_from,$per_page";
    $sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;
    $get_products = "select * from products where p_cat_id='16' ".$sWhere;
    $run_products = mysqli_query($db,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){

        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];

        echo "
        
            <div class='col-xl-2 col-lg-2 col-sm-4 col-xs-5'>

                <div class='product' style='height:400px'>

                    <a href='details.php?pro_id=$pro_id'>

                        <img class='img-responsive' src='admin_area/product_images/$pro_img1' title='$pro_title'>

                    </a>

                    <div class='text'>
                        <a href='details.php?pro_id=$pro_id'>
                        <h3 style='color:black;'> $pro_title </h3>
                        </a>
                    <p class='price'>£ $pro_price </p>
                    </div>

                </div>

            </div>
        
        ";

    }

}
function getAccessories(){

    global $db;
    $aWhere = array();
    
$per_page=40;

    if(isset($_GET['page'])){

        $page = $_GET['page'];

    }else{
        $page=1;
    }

    $start_from = ($page-1) * $per_page;
    $sLimit = " order by 1 DESC LIMIT $start_from,$per_page";
    $sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;
    $get_products = "select * from products where p_cat_id='13' ".$sWhere;
    $run_products = mysqli_query($db,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){

        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];

        echo "
        
            <div class='col-xl-2 col-lg-2 col-sm-4 col-xs-5'>

                <div class='product' style='height:400px'>

                    <a href='details.php?pro_id=$pro_id'>

                        <img class='img-responsive' src='admin_area/product_images/$pro_img1' title='$pro_title'>

                    </a>

                    <div class='text'>
                        <a href='details.php?pro_id=$pro_id'>
                        <h3 style='color:black;'> $pro_title </h3>
                        </a>
                    <p class='price'>£ $pro_price </p>
                    </div>

                </div>

            </div>
        
        ";

    }

}

function getGames(){

    global $db;
    $aWhere = array();
    
$per_page=40;

    if(isset($_GET['page'])){

        $page = $_GET['page'];

    }else{
        $page=1;
    }

    $start_from = ($page-1) * $per_page;
    $sLimit = " order by 1 DESC LIMIT $start_from,$per_page";
    $sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;
    $get_products = "select * from products where p_cat_id='17' ".$sWhere;
    $run_products = mysqli_query($db,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){

        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];

        echo "
        
            <div class='col-xl-2 col-lg-2 col-sm-4 col-xs-5'>

                <div class='product' style='height:400px'>

                    <a href='details.php?pro_id=$pro_id'>

                        <img class='img-responsive' src='admin_area/product_images/$pro_img1' title='$pro_title'>

                    </a>

                    <div class='text'>
                        <a href='details.php?pro_id=$pro_id'>
                        <h3 style='color:black;'> $pro_title </h3>
                        </a>
                    <p class='price'>£ $pro_price </p>
                    </div>

                </div>

            </div>
        
        ";

    }

}
function getManga(){

    global $db;
    $aWhere = array();
    
$per_page=40;

    if(isset($_GET['page'])){

        $page = $_GET['page'];

    }else{
        $page=1;
    }

    $start_from = ($page-1) * $per_page;
    $sLimit = " order by 1 DESC LIMIT $start_from,$per_page";
    $sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;
    $get_products = "select * from products where p_cat_id='18' ".$sWhere;
    $run_products = mysqli_query($db,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){

        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];

        echo "
        
            <div class='col-xl-2 col-lg-2 col-sm-4 col-xs-5'>

                <div class='product' style='height:400px'>

                    <a href='details.php?pro_id=$pro_id'>

                        <img class='img-responsive' src='admin_area/product_images/$pro_img1' title='$pro_title'>

                    </a>

                    <div class='text'>
                        <a href='details.php?pro_id=$pro_id'>
                        <h3 style='color:black;'> $pro_title </h3>
                        </a>
                    <p class='price'>£ $pro_price </p>
                    </div>

                </div>

            </div>
        
        ";

    }

}
function getHome(){

    global $db;
    $aWhere = array();
    
$per_page=40;

    if(isset($_GET['page'])){

        $page = $_GET['page'];

    }else{
        $page=1;
    }

    $start_from = ($page-1) * $per_page;
    $sLimit = " order by 1 DESC LIMIT $start_from,$per_page";
    $sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;
    $get_products = "select * from products where p_cat_id='19' ".$sWhere;
    $run_products = mysqli_query($db,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){

        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];

        echo "
        
            <div class='col-xl-2 col-lg-2 col-sm-4 col-xs-5'>

                <div class='product' style='height:280px'>

                    <a href='details.php?pro_id=$pro_id'>

                        <img class='img-responsive' src='admin_area/product_images/$pro_img1' title='$pro_title'>

                    </a>

                    <div class='text'>
                        <a href='details.php?pro_id=$pro_id'>
                        <h3 style='color:black;'> $pro_title </h3>
                        </a>
                    <p class='price'>£ $pro_price </p>
                    </div>

                </div>

            </div>
        
        ";

    }

}

function getOther(){

    global $db;
    $aWhere = array();
    
$per_page=40;

    if(isset($_GET['page'])){

        $page = $_GET['page'];

    }else{
        $page=1;
    }

    $start_from = ($page-1) * $per_page;
    $sLimit = " order by 1 DESC LIMIT $start_from,$per_page";
    $sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;
    $get_products = "select * from products where p_cat_id='15' ".$sWhere;
    $run_products = mysqli_query($db,$get_products);
    while($row_products=mysqli_fetch_array($run_products)){

        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];

        echo "
        
            <div class='col-xl-2 col-lg-2 col-sm-4 col-xs-5'>

                <div class='product' style='height:400px'>

                    <a href='details.php?pro_id=$pro_id'>

                        <img class='img-responsive' src='admin_area/product_images/$pro_img1' title='$pro_title'>

                    </a>

                    <div class='text'>
                        <a href='details.php?pro_id=$pro_id'>
                        <h3 style='color:black;'> $pro_title </h3>
                        </a>
                    <p class='price'>£ $pro_price </p>
                    </div>

                </div>

            </div>
        
        ";

    }

}
?>