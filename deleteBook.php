<?php include "menu.php";?>
<?php include "connection.php";?>
<h1>Delete Book</h1>
<p>Do you want to delete this book<br>
<form class="" action="deleteSelected.php" method="post">
<label for=""> books_id</label><br>
<input type="text" name="b_id" value="<?php echo $_GET['id'];?>"><br>
<label for=""> books_name</label><br>
<input type="text" name="b_name" value="<?php echo $_GET['name'];?>"disabled><br>
<label for=""> author</label><br>
<input type="text" name="b_author" value="<?php echo $_GET['author'];?>"disabled><br>
<label for=""> isbn</label><br>
<input type="text" name="b_isbn" value="<?php echo $_GET['isbn'];?>"disabled><br>
<a href="book.php">Cancel</a>
<input type="submit" name="" value="Delete">
</form>
</p>
<?php include "footer.php";?>