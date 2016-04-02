<?php

$to = "vaghelaprashant002@gmail.com";
$subject = "This is subject";

$message = "<b>This is HTML message.</b>";
$message .= '<img src="http://imagineinbemus.com/wp-content/uploads/2015/10/thankyou1.jpg" />';

$header = "From:abc@somedomain.com \r\n";
$header = "Cc:afgh@somedomain.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

if( $retval == true ) {
    echo "Message sent successfully...";
}else {
    echo "Message could not be sent...";
}
?>