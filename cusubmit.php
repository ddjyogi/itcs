<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$name = $first_name.' '.$last_name;
$company = $_POST['company'];
$email = $_POST['email'];
if(isset($_POST['rpo'])=='')
{
	$rpo = "";
}else {
$rpo = $_POST['rpo'];
}
if(isset($_POST['bis'])=='')
{
	$bis = "";
}else {
$bis = $_POST['bis'];
}
if(isset($_POST['techs'])=='')
{
	$techs = "";
}else {
$techs = $_POST['techs'];
}
if(isset($_POST['fis'])=='')
{
	$fis = "";
}else {
$fis = $_POST['fis'];
}

if($rpo!="")
$sermsg="\n".$rpo."\n";
if($bis!="")
$sermsg.=$bis."\n";
if($techs!="")
$sermsg.=$techs."\n";
if($fis!="")
$sermsg.=$fis;
$newmsg = $sermsg;

$to = "yogendra.tanwar@gmail.com"; //khuranachetan@gmail.com,
$tocust = "$email";
$phone = $_POST['phone'];
$subject = $name." ".$company." ".$phone;
$message = $_POST['message'];
$message = <<<EMAIL
Email from $name

My email id is $email

Services interested in:
$newmsg

Message: $message
EMAIL;
mail($to, $subject, $message, "From: ".$email);

$custmessage = $_POST['message'];
$messagecust = <<<EMAIL
Dear Customer,
        
Thanks for showing interest in our services. For further queries please contact our helpdesk at $to.
Your request is stated as below:
        
You are interested in: 
				
$newmsg
		
$custmessage

Your Name:  $name
Company:    $company
Phone:      $phone
Email:      $email
        
Warm Regards,
Team Pannacea        
EMAIL;
mail($tocust, $subject, $messagecust, "From: ".$email);
//header("Location:index.php?2451541c654th");

?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <link href="css/cssmain.css" type="text/css" rel="stylesheet" media="screen"/>        
    </head>
    <body>
        <div class="mainbody">
            <div class="mainbody_1024">
                <?php
                    include 'header_main.php';
                    include 'menu_all.php';
                ?>
                <div class="middle">
                    <div class="middle_mainpage">
                        <div class="thanks_main"><span>Message sent! Thank you for showing interest&nbsp;<?php echo $name; ?></span></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>