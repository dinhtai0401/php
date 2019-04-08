<?php include "menu.php"; ?>
<h2>Welcome</h2>
<?php
session_start();
echo 'Welcome'.$_SESSION['username'];
 ?>
<?php include "footer.php"; ?>
