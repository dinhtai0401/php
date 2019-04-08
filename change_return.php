<?php include "menu.php"; ?>

  <form class="" action="update_return.php" method="post">
    <input type="hidden" name="books_id" value="<?php echo $_GET['books_id'] ?>" disabled><br />
    <label for="">Return date</label><br />
    <input type="date" name="return_date" value="<?php echo $_GET['return_date'] ?>"><br>
    <input type="submit" name="" value="UPDATE">
  </form>
<?php include "footer.php"; ?>
