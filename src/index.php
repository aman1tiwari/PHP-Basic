<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New Item</title>
</head>
<body>
    <?php
    $original = array( '1','2','3','4','5' );
    echo 'Original array : '."\n";
    foreach ($original as $x) 
    {echo "$x ";}

    $inserted = '$';
    array_splice( $original, 3, 0, $inserted ); 
    echo " <br><br>" ."After inserting '$' the array is : ";
    foreach ($original as $x) 
    {echo "$x ";}
    echo "\n"
    ?>
    <br><br><br>
    <a href="./temperature.php">Click to see Average Temperature Task</a><br>
    <a href="./filterout.php">Click to see filterout task</a><br>
    <a href="./delete.php">Click to see delete task</a><br>

</body>
</html>