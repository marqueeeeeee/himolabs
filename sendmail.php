<?php
// the message
$sender = $_POST["sender"];
$txt = $_POST['message'];
$txt = wordwrap($txt,70);
$message = "
Sender: ".$sender." "."\n"."
Message: ".$txt."
";
$to = "himolabs@gmail.com";
$subject = "HimoLabs Contact Us";
$headers = "From: " . "\r\n" .
"CC: glenn.espejo0112@gmail.com, jeealisongloria@gmail.com, markivankarlsancho@gmail.com, freyja@freedom@gmail.com";
mail($to,$subject,$message,$headers);

header( 'Location: http://www.himolabs.com/' ) ;
?>
