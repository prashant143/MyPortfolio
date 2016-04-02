
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


<div >
<script type="text/javascript">
    function checkPass()
    {
        //Store the password field objects into variables ...
        var password = document.getElementById('password');
        var confirm_password = document.getElementById('confirm_password');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        //Compare the values in the password field
        //and the confirmation field
        if(password.value == confirm_password.value){
            //The passwords match.
            //Set the color to the good color and inform
            //the user that they have entered the correct password
            confirm_password.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Passwords Match!"
        }else{
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            confirm_password    .style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Passwords Do Not Match!"
        }
    }
</script>
<div id="register">

    <form action="registerin.php"   method="post" >
        <h1>Sign Up</h1>
        <h3>Its free and always will be</h3>
        <table cellpadding="5" cellspacing="5">
            <tr>

                <td><input type="text" name="fullname" size="25" maxlength="50" placeholder="Your name *" required /></td>
            </tr>


            <tr>

                <td>
                    <input type="text" name="mobile" placeholder="Your phone *" required pattern="\d{3}\d{3}\d{4}"/>
                </td>
            </tr>
            <tr>

                <td>
                    <input  type="email" name="email_id" placeholder="Your mail *" required />
                </td>
            </tr>
            <tr>

                <td>
                    <input type="password" id="password" name="password" class="pw" placeholder="Password *" maxlength="12" required  >
                </td>
            </tr>
            <tr>

                <td>
                    <input type="password"  id="confirm_password" name="confirm_password" class="pw" placeholder="Confirm password *" onkeyup="checkPass(); return false;" maxlength="12"  required>

                </td>
            </tr>
            <tr>
                <td>
                    <span id="confirmMessage" class="confirmMessage"></span>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'"> Show password
                </td>
            </tr>
            <tr>

                <td><input type="submit"  value="REGISTER"  title="Submit" name="submit">
                </td>
            </tr>
            <tr>
                <td>
                    Already registered? <a href="login.php" style="color: dodgerblue;"> Login </a>
                </td>
            </tr>
        </table>



    </form>
</div>
    </div>
</body>
</html>


