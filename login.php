

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
    <body>


    <div class="logincls" >

<form action="validate.php"  method="post">

    <table cellpadding="5" cellspacing="5">
        <tr>
            <td style="padding-bottom: 2%;">

                <label style="color: dodgerblue;font-size: x-large;font-weight:lighter;font-family: Calibri;text-align:justify;">User Login</label>
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>

            <td>
                <input id="email" type="email" name="email_id" placeholder="Your email id *" required/>
            </td>
        </tr>
        <tr>

            <td>
                <input type="password" id="password" name="password" class="pw" placeholder="Your password *" required>
            </td>
        </tr>
        <tr>
            <td>
                <a href="forgot.php" title="Forgot password" style="text-align: end;">Forgot password?</a>
            </td>
        </tr>
        <tr>

            <td><a title="submit your feedback" style="text-decoration:none;">
                    <input type="submit" value="Login"  title="Login"> </a>
            </td>
        </tr>
        <tr>
            <td>
                Not a member?<a href="register.php" title="register" style="color: dodgerblue;"> Join Now </a>
             </td>
        </tr>
    </table>


</form>
    <div>
        <label style="color: green;">Please login to access my profile *</label>
    </div>

        <div>
           <label style=" background-color: cornsilk;font-family: Calibri;"> I keep updating my website every friday.
               <br>

               NOTE : You can use existing credentials
               <table>
                   <tr>
                       <td>
                           <b>Username :</b> guest@welcome.com
                       </td>
                   </tr>
                       <tr>
                       <td>
                           <b>Password  :</b> guest
                       </td>
                   </tr>
               </table>

           </label>


        </div>
</div>
</body>
</html>


