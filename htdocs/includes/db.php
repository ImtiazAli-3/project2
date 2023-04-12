<?php 

$con = mysqli_connect("localhost","root","","ecom_store");

if(!($con)){
    echo "<script>alert('Connection error')</script>";
}
?>