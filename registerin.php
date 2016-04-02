<?php ob_start();
//store data into variable
try {


        $fullname = $_POST['fullname'];
        $mobile=$_POST['mobile'];
        $email_id=$_POST['email_id'];
        $password=$_POST['password'];


        require_once('db.php');

//INSERT query in order to insert data into database
        $sql = "INSERT INTO register (fullname,mobile,email_id,password)
      VALUES (:fullname,:mobile,:email_id,:password)";

//Execute query
        $cmd = $conn->prepare($sql);


        $cmd->bindParam(':fullname', $fullname, PDO::PARAM_STR, 50);
        $cmd->bindParam(':mobile', $mobile, PDO::PARAM_STR,50);
        $cmd->bindParam(':email_id', $email_id, PDO::PARAM_STR,50);

        $cmd->bindParam(':password', $password, PDO::PARAM_STR, 500);



        //send email

        $to=$_REQUEST['email_id'];
        $subject = "Prashant Vaghela";

        $messages = "<b>Prashant Vaghela</b><br><h3 style='font-family: Calibri;'>Thank you for sign up on my site.</h3><br>";
        $messages .= 'Username : '.$_REQUEST['email_id'].'<br>';
        $messages .= 'Password : '.$_REQUEST['password'].'<br>';

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
        header('location:login.php');

}
catch(Exception $e)
{
    mail('vaghelaprashant002@gmail.com','Error message',$e);

    //redirect page to error page if encounter any error during executing code
    header('location:error.php');
}
ob_flush();
?>
