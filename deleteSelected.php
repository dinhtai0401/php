<?php include "connection.php";  ?>
<?php
$sql='DELETE FROM books WHERE books_id ='. $_POST['b_id'];
$result=$db->query($sql);
// you can use header-Location only if there is no output yet
header('Location: books.php');
?>
