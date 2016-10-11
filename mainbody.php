<?php
include_once 'config.php';
include_once 'db.php';
//$con=mysqli_connect("localhost","root","","lorem"); //This mysqli_connect style, however this site is built basis PDO method
$get_loremr = get_lorem(); //This variable displays Lorem. Use <?php "echo $get_loremr['loremcon'];"&?&>
?>
<div class="middle">
    <div class="middle_mainpage">        
        <?php
            if(isset($_GET['about_us']))
            {
                include 'aboutus.php';
            }
            elseif(isset ($_GET['index']))
            {
                echo $get_loremr['loremcon'];
            }
            elseif(isset ($_GET['portfolio']))
            {
                include 'portfolio.php';;
            }
            elseif(isset ($_GET['services']))
            {
                include 'services.php';
            }
            elseif(isset ($_GET['blog']))
            {
                include 'blog.php';
            }
            elseif(isset ($_GET['contact_us']))
            {
                include 'contactus.php';
            }
        ?>        
    </div>
</div>
<?php
    


?>