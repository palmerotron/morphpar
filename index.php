<!DOCTYPE HTML>
<html>
<head>
    <title>My PHP Test</title>
    <?php require_once('head.php'); ?>
</head>
<?php require_once('functions.php'); ?>
<body>
    <div class="container">
    <div class="redText">
        <?php
        print('Hello World!');
        $numberOne = 1;
        print('<br />');
        print($numberOne);
        echo paragraphWrap('Hello, my name is Palmerin, nice to meet you.', False);
        ?>
    </div>
    <?php
    $myArray = [2,4,6,8,10,12];
    foreach($myArray as $number) {
        echo $number . ' ';
    }
    array_push($myArray, 14,16,18,20);
    foreach($myArray as $number) {
        echo $number . ' ';
    }
    ?>
    <hr />
    <?php 
    $betterArray = [
        'age' => '21',
        'gender' => 'male',
        'nation' => 'USA'
    ];?>
    <div class="row">
        <table class="table">
            <tr>
            <?php
            foreach($betterArray as $label => $value) {
                echo '<th>' . $label . '</th>';
            }
            ?>  
            </tr>
            <tr>
            <?php 
            foreach($betterArray as $label => $value) {
                echo '<td>'. $value . '</td>';
            }
            ?>
            </tr>
        </table>
    </div>
    </div>
</body>
</html>