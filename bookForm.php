<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<?php
//find the biggest books_id
$sql="select max(books_id) from books";
$result=$db->query($sql);
$max= $result->fetch(PDO::FETCH_COLUMN);
//echo 'Max = '.$max;
$max++;
?>
<h1>Add a book</h1>
<p>
  <form class="" action="addBook.php" method="post">
    <label for="">books_id</label> <br>
    <input type="number" name="b_id" value="<?php echo $max;?>" required><br>
    <label for="">books_name</label><br>
    <input type="text" name="b_name" value="" required><br>
    <label for="">author</label><br>
    <input type="text" name="b_author" value=""><br>
    <label for="">isbn</label><br>
    <input type="text" name="b_isbn" value=""><br>
    <input type="submit" name="" value="Add">
  </form>
</p>

<?php include "footer.php"; ?>
