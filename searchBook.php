<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<h1>Books</h1>
<?php
//print_r($_POST);
//$sql='SELECT * FROM books WHERE book_name LIKE'.$_POST['abook'].'%';
//echo 'Do you want to execute this query<br>';
//echo  $sql;
$selection=$_POST['abook'].'%';
	$stmt = $db->prepare("SELECT * FROM books WHERE books_name LIKE :a_name");
	$stmt->bindParam(':a_name',$selection);
	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		foreach ($result as $row) {
			echo $row['books_id'].' '.$row['books_name'].' '.$row['author'].'<br/>';
		}

 ?>
<?php include "footer.php"; ?>
