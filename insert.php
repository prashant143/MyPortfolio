<?php ob_start();
require_once ('header.php');

?>


<?php

//store data into variable
try {
    if(isset($_POST['submit']))
    {

    $name = $_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

   require_once('db.php');

//INSERT query in order to insert data into database
        $sql = "INSERT INTO feedback (name,email,phone,message)
      VALUES (:name,:email,:phone,:message)";

//Execute query
        $cmd = $conn->prepare($sql);


        $cmd->bindParam(':name', $name, PDO::PARAM_STR, 50);
        $cmd->bindParam(':email', $email, PDO::PARAM_STR,50);
        $cmd->bindParam(':phone', $phone, PDO::PARAM_STR,50);

        $cmd->bindParam(':message', $message, PDO::PARAM_STR, 500);



        //send email

        $to=$_REQUEST['email'];
        $subject = "Feedback";

        $messages = "<b>Prashant Vaghela</b><br><p>Thank you for submitting your feedback.</p>";
        $messages .= '<img src="http://imagineinbemus.com/wp-content/uploads/2015/10/thankyou1.jpg" />';
        $messages .= '<br><p>Regards</p><p>Prashant Vaghela</p><address>27B College Crecent<br>Barrie, ON L4M 2W4</address>';
        $messages .= '<br><p>Phone : +1249-877-7725<br>Email : vaghelaprashant002@gmail.com</p>';


        $header = "From:vaghelaprashant002@gmail.com     \r\n";
        $header = "Cc:vaghelaprashant12@yahoo.in \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

         mail ($to,$subject,$messages,$header);



        $cmd->execute();

//close the connection
        $conn = null;
    header('location:contact.php');
    }
    }


catch(Exception $e)
{
    mail('vaghelaprashant002@gmail.com','Error message',$e);

    //redirect page to error page if encounter any error during executing code
    header('location:error.php');
}
require_once ('footer.php');
ob_flush();
?>
