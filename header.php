<?php ob_start();
require_once ('auth.php');
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>
        </title>
        <meta content="text/html;charset=utf-8" http-equiv="content-type">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

        <!-- Font awesome-->
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link href="css/css.css" rel="stylesheet">
        <link rel="icon" href="images/code.png">


    </head>
    <?php
    if(!empty($_SESSION['reg_id']))
    {
        require_once ('db.php');

        $sql="SELECT fullname FROM register WHERE reg_id='{$_SESSION['reg_id']}'";

        $cmd=$conn->prepare($sql);
        $cmd->execute();
        $result=$cmd->fetchAll();
        foreach($result as $results)
        {
            $getname = $results['fullname'];
        }

    }

    ?>
    <nav class="navbar navbar-default">
        <a href="index.php" title="COMP1006 WEB APP" class="navbar-brand">
           <p style="font-family: Calibri; color: deepskyblue; font-size: x-large;">PRASHANT VAGHELA</p>
       </a>
        <ul class="nav navbar-nav navbar-right">

            <li style="float: left;"><a href="index.php" title="Home" > Home</a></li>

            <li style="float: left;"><a href="education.php" title="Education History">Education History</a></li>

            <li style="float: left;"><a href="workhistory.php" title="Work History">Work History</a></li>
            <li style="float: left;"><a href="contact.php" title="Contact me">Contact me</a></li>
            <li style="float: left; " id="child"><a style="color:darkblue;">Welcome <?php echo $getname; ?></a></li>
          <!--  <ul >
                    <li style="float: left;"><a href="" title="My Profile">My profile</a></li>
                    <li style="float: left;"><a href="" title="Change Password">Change password</a></li>
                </ul> -->




            <li style="float: left;"><a href="logout.php" title="Logout">Logout</a>

            </li>

        </ul>
    </nav>
    <main class="container">

<?php
ob_flush();
?>


