<?php
session_start();


if($_POST['username']==='Ann'&& $_POST['passwd'] ==='Ann123'){
$_SESSION['logged_in'] = true;
$_SESSION['username'] = $_POST['username'];
header('Location: welcome.php');
exit;
}
else {
    header('Location: login.php');
    exit;
}
//unsuccessful logged in
//$_SESSION['logged_in'] = false;

?>