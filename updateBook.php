<?php include "menu.php";?>
<?php include "connection.php";?>
<h1>Update Book</h1>
<?php
print_r($_GET);

?>
<p>
<form class="" action="updateSelected.php" method="post">
<label for=""> books_id</label><br>
<input type="text" name="b_id" value="<?php echo $_GET['id'];?>"disabled><br>
<label for=""> books_name</label><br>
<input type="text" name="b_name" value="<?php echo $_GET['name'];?>" required><br>
<label for=""> author</label><br>
<input type="text" name="b_author" value="<?php echo $_GET['author'];?>"><br>
<label for=""> isbn</label><br>
<input type="text" name="b_isbn" value="<?php echo $_GET['isbn'];?>"><br>
<input type="submit" name="" value="Update">
</form>
</p>
<?php include "footer.php";?>