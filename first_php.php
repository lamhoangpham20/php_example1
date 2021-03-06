<?php include "menu.php" ?>


    <h1>PHP Basics</h1>
    <?php 
    $myname="Lam";
    echo "Hello $myname";
    echo '<br>';
    echo 'Hello ' .$myname;
    echo '<br>';
    echo 'Here is the link: <a href="https://www.oamk.fi">'.$myname.'</a>';
    ?>
    <h2>An array</h2>
    <?php 
    $students = array('Tai', 'Long', 'Nam');
    echo 'Second student is '.$students[1];
    ?>
    <h3>print_r-function</h3>
    <?php print_r($students);
    ?>
    <h3> foreach -loop</h3>
    <ul>
        <?php
        foreach($students as $row) {
            echo'<li>'.$row.'</li>';
        }
        ?>
        </ul>
        <h3>Two-dimension array</h3>
        <?php
        $names=array(
            array('Jim','Smith'),
            array( 'Lisa','Jones'),
            array('Bob','Daniels')
        );
        echo '<h3>with print_r</h3> <br>';
        print_r($names);
        echo '<h3>with foreach</h3><br>';
        echo'<ul>';
        foreach($names as $row){
            echo'<li>'.$row[0].' '.$row[1].'</li>';
        }
        echo '</ul>';
        ?>
        <?php include "footer.php" ?>
