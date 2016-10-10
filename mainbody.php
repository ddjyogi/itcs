<?php
include_once 'config.php';
include_once 'db.php';
//$con=mysqli_connect("localhost","root","","lorem"); //This mysqli_connect style, however this site is built basis PDO method
$get_loremr = get_lorem(); //This variable displays Lorem. Use <?php "echo $get_loremr['loremcon'];"&?&>
?>
<div class="middle">
    <div class="middle_mainpage">        
        <h3><?php echo $get_loremr['loremcon'];?></h3>        
    </div>
</div>