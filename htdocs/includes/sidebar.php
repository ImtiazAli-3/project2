<?php 

$aMan = array();


// This is for manufacturers Begin //

if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

    foreach($_REQUEST['man'] as $sKey=>$sVal){

        if((int)$sVal!=0){

            $aMan[(int)$sVal] = (int)$sVal;

        }

    }

}

// This is for manufacturers Finisih //

?>
<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
    <div class="panel-heading"><!-- panel-heading Begin -->
        <h3 class="panel-title">
            Series

            <div class="pull-right"><!-- pull-right Begin -->
            
                <a href="JavaScript:Void(0);" style="color:black;">
                
                    <span class="nav-toggle hide-show"><!-- nav-toggle hide-show Begin -->
                    
                        Hide
                    
                    </span><!-- nav-toggle hide-show Finish -->
                
                </a>
            
            </div><!-- pull-right finish -->

        </h3>
    </div><!-- panel-heading Finish -->

    <div class="panel-collapse collapse-data"><!-- panel-collapse collapse-data Begin -->
    
        <div class="panel-body"><!-- panel-body 1 Begin -->
            <div class="input-group"><!-- input-group Begin -->
                <input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-manufacturer" data-action="filter" placeholder="Filter Series">

                    <a class="input-group-addon"><!-- input-group-addon Begin -->
                    
                        <i class="fa fa-search"></i>
                        
                    </a><!-- input-group-addon Finish -->

            </div><!-- input-group Finish -->
            </div><!-- panel-body 1 Finish -->
        <div class="panel-body scroll-menu"><!-- panel-body 2 Begin -->
            <ul class="nav nav-pills nav-stacked category-menu" id="dev-manufacturer"><!-- nav nav-pills nav-stacked category-menu Begin -->
                <?php
                $get_manufacturer = "select * from manufacturers where manufacturer_top='no'";
                $run_manufacturer = mysqli_query($con,$get_manufacturer);

                while($row_manufacturer=mysqli_fetch_array($run_manufacturer)){

                    $manufacturer_id = $row_manufacturer['manufacturer_id'];
                    $manufacturer_title = $row_manufacturer['manufacturer_title'];
                    $manufacturer_image = $row_manufacturer['manufacturer_image'];
                    echo "
                    <li class='checkbox checkbox-primary'>

                        <a>

                        <label>

                            <input ";
                            
                            if(isset($aMan[$manufacturer_id])){
                                echo "checked='checked'";
                            }
                            
                            echo " value='$manufacturer_id' type='checkbox' class='get_manufacturer' name='manufacturer'>

                            <span>
                            $manufacturer_image
                            $manufacturer_title
                            </span>

                        </label>

                        </a>
                    
                    </li>
                    ";

                }
                
                ?>
                
            </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
        </div><!-- panel-body 2 Finish -->

    </div><!-- panel-collapse collapse-data Finish -->
    
</div><!-- panel panel-default sidebar-menu Finish -->