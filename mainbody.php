<?php
//include_once 'config.php';
//include_once 'db.php';
//$con=mysqli_connect("localhost","root","","lorem"); //This mysqli_connect style, however this site is built basis PDO method
//$get_loremr = get_lorem(); //This variable displays Lorem. Use <?php "echo $get_loremr['loremcon'];"&?&>
?>
<div class="middle">
    <div class="middle_mainpage">        
        <?php
            
            if(isset($_GET['about_us']))
            {
                include 'aboutus.php';
            }
            elseif(isset($_GET['index']))
            {
                include 'home.php';
                //echo $get_loremr['loremcon'];
            }
            elseif(isset($_GET['portfolio']))
            {
                include 'portfolio.php';;
            }
            elseif(isset($_GET['2451541s654su']))
            {
                include 'services.php';
            }
            elseif(isset($_GET['blog']))
            {
                include 'blog.php';
            }
            elseif(isset($_GET['2451541c654su']))
            {
                include 'contactus.php';
            }
            else{
                include 'home.php';
            }
        ?>        
    </div>
</div>
<?php
    


?>