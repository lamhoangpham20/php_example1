
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="Menu">
    <h2>Menu</h2>
    <ul>
    <li><a href="login.php">login</a></li>
    <li><a href="logout.php">logout</a></li>
        <li><a href="first_php.php">Basic</a></li>
        <li><a href="second.php">Array</a></li>
        <li><a href="third.php">Forms</a></li>
        <li><a href="forth.php">Function</a></li>
        <li><a href="fifth.php">Forms</a></li>
</ul>
<h2> Database</h2>
<ul>
<li><a href="books.php">Books</a></li>
</ul>
</div>
<div id="header">
welcome
<?php
session_start();
if (isset($_SESSION['logged_in']))
{
    echo '<b>'.$_SESSION['username'].'</b>';
    echo '<a href="logout.php">&nbsp;Logout</a>';
}
else{
    echo '<b>Quest</b>';
    echo '<a href="login.php">&nbsp;Login</a>';
}
?>
<div id="container">
