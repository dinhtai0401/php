<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<h2>Books</h2>
<p>
  <form class="" action="searchBook.php" method="post">
    <label for="">Name of the book</label>
    <input type="text" name="abook" value="">
    <input type="submit" name="" value="Search">
  </form>
</p>
<p>
  <a href="bookForm.php"><button>Add new Book</button></a>
</p>
<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>books_id</th><th>books_name</th><th>author</th><th>isbn</th><th>Update</th><th>Delete</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql="SELECT * FROM books";
$books=$db->query($sql);
foreach ($books as $row ) {
  echo '<tr>';
  echo '<td>'.$row['books_id'].'<br>'.'</td>';
  echo '<td>'.$row['books_name'].'<br>'.'</td>';
  echo '<td>'.$row['author'].'<br>'.'</td>';
  echo '<td>'.$row['isbn'].'<br>'.'</td>';
  //update
  echo '<td><a href="updateBook.php?id=';
    echo $row['books_id'];
    echo '&name=';
    echo $row['books_name'];
    echo '&author=';
    echo $row['author'];
    echo '&isbn=';
    echo $row['isbn'];
  echo '"><button class="btn btn-primary">Update</button></a> </td>';
  //delete
  echo '<td><a href="deleteBook.php?id=';
    echo $row['books_id'];
    echo '&name=';
    echo $row['books_name'];
    echo '&author=';
    echo $row['author'];
    echo '&isbn=';
    echo $row['isbn'];
  echo '"><button class="btn btn-danger">Delete</button></a> </td>';
  echo '</tr>';
}
 ?>
</tbody>
</table>
<?php include "footer.php"; ?>
