
<?php
session_start();

//after succesful Login
if ($_POST['username']==='Ann' && $_POST['passwd'] ==='Ann123'){
$_SESSION['logged_in'] = true;
$_SESSION['username'] = $_POST['username'];
//redirect to welcome page
header('location: welcome.php');
exit;
}
else {
  header('location: login.php');
}
//after unsucesful login

//redirect to Login page or something ...
 ?>
