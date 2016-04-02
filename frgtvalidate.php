<?php ob_start();


try{
//its getting email id from text box
    $email=$_POST['email_id'];

        require_once ('db.php');
        //select email and password and count record
        $sql="SELECT email_id,password FROM register WHERE email_id=:email_id";

        $cmd=$conn->prepare($sql);
        $cmd->bindParam(':email_id',$email,PDO::PARAM_STR,50);
        $cmd->execute();
        $result= $cmd->fetchAll();
        $count=$cmd->rowCount();
        //if does not have any record it will give you error
        if($count==0)
        {
            echo "<h3 style='color: dodgerblue;font-size:large;font-weight:lighter;font-family: Calibri;text-align:justify;'> Please enter valid email id</h3>";
            echo ' <a href="forgot.php" title="Go back"> <label style="color: dodgerblue;font-size:large;font-weight:lighter;font-family: Calibri;text-align:justify;"> Go back</label></a>';

        }
        //if it has existing email id it will send me email id with credentials
        else{
            //it will store data in variable using foreach loop
            foreach($result as $res)
            {
                $emailid=$res['email_id'];
                $pass=$res['password'];
            }
            //get email from text box
            //store messages detail in variable
            $to = $_REQUEST['email_id'];
            $subject="Credentials";
            $messages="<H3 style='color: #00b0c5;font-family: Calibri; font-size:x-large; font-weight: lighter;'>Welcome back to admin panel</H3>";
            $messages .="<h4>Your credential is given below:</h4><br>";
            $messages .="Username : " . $emailid;
            $messages .="<br>";
            $messages.= "Password : " . $pass;
            $messages .="<br>";
            $messages .="<br>";


            $messages .= '<br>Regards<br>Prashant Vaghela<address>27B College Crecent<br>Barrie, ON L4M 2W4</address>
            <p>Phone : +1249-877-7725<br>Email : vaghelaprashant002@gmail.com</p>';


            $header = "From:vaghelaprashant002@gmail.com     \r\n";
            $header = "Cc:vaghelaprashant12@yahoo.in \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";

            mail ($to,$subject,$messages,$header);

            header('location:login.php');

    }


}
catch (Exception $e)

{
    mail( 'vaghelaprashant002@gmail.com','Send Credential Error',$e);
    //redirect to error page
    header('location:error.php');
}

ob_flush();
?>

