<?php include "menu.php"?>
<h1> Post example </h1>
<?php
print_r($_POST);
?>

<?php 
echo 'Hello '.$_POST['fname'].' '.$_POST['lname'];
?>
<?php include "footer.php"?>