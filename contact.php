<!doctype html>

<html lang="fr">
<body>
<?php
session_start();
include 'view/_header.php';
include 'view/_topbar.php';
?>
	<div class="container">
		<div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div id="musicfeed">
                   <h1><i class="fa"></i> Contactez Nous</h1>
               </div>
           </div>
        </div>
    </div>
<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form id="contactform" action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your name:<br>
    <input name="name" type="text" value="" size="30"/><br>
    Your email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("fscalabrin2@gmail.com", $subject, $message, $from);
		echo "Email sent!";
	    }
    }  
?>
<?php 
include 'view/_footer.php';
?>
</body>