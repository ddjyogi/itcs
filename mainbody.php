<?php
//include_once 'config.php';
//include_once 'db.php';
//$con=mysqli_connect("localhost","root","","lorem"); //This mysqli_connect style, however this site is built basis PDO method
//$get_loremr = get_lorem(); //This variable displays Lorem. Use <?php "echo $get_loremr['loremcon'];"&?&>
?>
<div class="middle">
    <div class="middle_mainpage">        
        <?php
            
            if(isset($_GET['2451541ab654s']))
            {
                include 'menu_all.php';
                include 'aboutus.php';
            }
            elseif(isset($_GET['index']))
            {
                include 'home.php';
                //echo $get_loremr['loremcon'];
            }
            elseif(isset($_GET['2451541s654po']))
            {
                include 'menu_all.php';
                include 'portfolio.php';;
            }
            elseif(isset($_GET['2451541s654su']))
            {
                include 'menu_all.php';
                include 'services.php';
            }
            elseif(isset($_GET['blog']))
            {
                include 'blog.php';
            }
            elseif(isset($_GET['2451541c654su']))
            {
                include 'menu_all.php';
                include 'contactus.php';
            }
            elseif(isset($_GET['2451541r654se']))
            {
                include 'menu_all.php';
                include 'rpo.php';;
            }
            elseif(isset($_GET['2451541op654s']))
            {
                include 'menu_all.php';
                include 'operex.php';;
            }
            elseif(isset($_GET['2451541b654se']))
            {
                include 'menu_all.php';
                include 'bpre.php';;
            }
            elseif(isset($_GET['2451541c654sc']))
            {
                include 'menu_all.php';
                include 'controlnc.php';;
            }
            elseif(isset($_GET['2451541a654mr']))
            {
                include 'menu_all.php';
                include 'amr.php';;
            }
            elseif(isset($_GET['2451541r654td']))
            {
                include 'menu_all.php';
                include 'techdep.php';;
            }
            elseif(isset($_GET['2451541c654th']))
            {
                include 'menu_all.php';
                include 'cusubmit.php';
            }
            elseif(isset($_GET['2451541bp654r']))
            {
                include 'menu_all.php';
                include 'bpre.php'; //User clicks on Business Process Insight link from services page
            }
            elseif(isset($_GET['2451541hp654r']))
            {
                include 'menu_all.php';
                include 'rpo.php'; //User clicks on HR Services link from services page
            }
            elseif(isset($_GET['2451541te654s']))
            {
                include 'menu_all.php';
                include 'techdep.php'; //User clicks on Technology Services link from services page
            }            
            else{
                include 'home.php';
            }
        ?>        
    </div>
</div>