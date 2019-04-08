<?php
  include "connection.php";
  $stmt=$db->prepare("UPDATE borrows SET return_date=:return_date WHERE books_id = :books_id");
  $stmt->bindParam(':return_date',$_POST['return_date']);
  $stmt->bindParam(':books_id',$_POST['books_id']);
  $stmt->execute();
  header('Location: borrows.php');
?>
