<?php ob_start();
?>

<?php
$email_id = $_POST['email_id'];
$password = $_POST['password'];
require('db.php');
$sql = "SELECT reg_id FROM register WHERE email_id = :email_id AND password = :password";

$cmd = $conn->prepare($sql);
$cmd->bindParam(':email_id', $email_id, PDO::PARAM_STR, 50);
$cmd->bindParam(':password', $password, PDO::PARAM_STR, 128);
$cmd->execute();
$users = $cmd->fetchAll();
$count = $cmd->rowCount();

if ($count == 0) {
    echo 'Invalid Login';
    exit();
}
else {
    session_start();
    foreach  ($users as $user)
    {
        $_SESSION['reg_id']=$user['reg_id'];

    }

}

$conn = null;
header('location:index.php');

?>

</body>
</html>
<?php ob_flush(); ?>
