<?php include "menu.php";?>
<?php include "connection.php";?>
<?php
print_r($_POST);
//require '/home/user/secret/connection.php';
	$stmt=$db->prepare("UPDATE books SET books_name=:naBook,author=:auBook,isbn=:isBook where books_id=:idBook"); 
		$stmt->bindParam(':idBook', $b_id);
		$stmt->bindParam(':naBook', $b_name);
        $stmt->bindParam(':auBook', $b_author);
        $stmt->bindParam(':isBook', $b_isbn);
	$b_id=$_POST['b_id'];
	$b_name=$_POST['b_name'];
	$b_author=$_POST['b_author'];
    $b_isbn=$_POST['b_isbn'];
	$stmt->execute();
?>
<?php include "footer.php";?>