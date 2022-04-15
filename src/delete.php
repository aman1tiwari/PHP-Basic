<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <?php
    $colors = array('key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black');
    $given_value = 'Black';
    print_r($colors);
    echo "<br><br>";
    $new_filtered_array = array_filter($colors, function ($element) use ($given_value) { return ($element != $given_value);}); 
      
    print_r($new_filtered_array);

    ?>
</body>
</html>