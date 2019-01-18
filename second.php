<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1> Assosiative array</h1>
    <?php
    $students=array(
        array("fn"=>'Jim', "ln"=>'Smith'),
        array("fn"=>'Lisa', "ln"=>'Jones'),
        array("fn"=>'Bill', "ln"=>'Daniels'),
    );
    ?>
    <h3>print_r -functions</h3>
    <?php print_r($students); ?>
    <h3>foreach-loop</h3>
    <ul>
        <?php
        foreach($students as $row){
            echo'<li>'.$row['fn'].' '.$row['ln'].'</li>';
        }
        ?>
    </ul>
    <table border="1">
        <thead>
            <tr>
                <th>Firstname</th><th>Lastname</th>
    </tr>
    </thead>
    <tbody>
        <?php
        foreach ($students as $row){
            echo '<tr>';
            echo'<td>'.$row['fn'].'</td>';
            echo'<td>'.$row['ln'].'</td>';
            echo'</tr>';
        }
        ?>
        </table>
</body>
</html>