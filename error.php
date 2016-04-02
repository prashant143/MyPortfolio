<?php ob_start();
require_once ('auth.php');
?>
<?php
$page_title='Error';

require_once('header.php');
?>
<div style="background-color: gainsboro;opacity: .9; height: 100%;width: 100%">
<div class="errorcss">
    <img src="images/error.png" alt="Error" style="float: left;" height="200" width="200"/>
    <h1>OOPS..!</h1>
    <p> Something went wrong.<br>
        Dont worry we will fix it out as soon as possible</p>
</div>
</div>
<?php
require_once ('footer.php');
ob_flush();
?>
