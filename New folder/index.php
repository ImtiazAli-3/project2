<?php
require "header.php";
?>

<main>
<?php
if (isset($_SESSION['userid'])) {
    echo '<p class="loginstmt">Please remember to logout</p>';
}
else {
    echo '<p class="logoutstmt">You are currently not logged in</p>';
}
?>
<style>
    .logoutstmt{
        text-align: center;
        font-weight: 500;
        font-size: 20px;
        font-weight: bold;
    }
    .loginstmt{
        text-align: center;
        font-weight: 500;
        font-size: 20px;
        font-weight: bold;
        margin-top: 20px;
    }
</style>    
</main>

<?php
require "footer.php";
?>