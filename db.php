<?php
require_once 'config.php';
function get_lorem(){
    global $con;
    $get_loremcon = "select loremcon from loremtext where lorem_id='1'";
    $get_loremc = $con->query($get_loremcon);
    $get_loremr = $get_loremc->fetch();
    return $get_loremr;
}
?>
