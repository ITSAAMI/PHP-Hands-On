<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sorting Arrays</title>
</head>
<body>
    <?php
    
    // $food = ["Baryani", "Anda", "dam-pokh", "Chicken"];


    // $sort_food =  rsort($food);


    // echo "<pre>";
    // print_r($food);
    // echo "</pre>";


    $laptops = array("qari" => "Asus", "shahab" => "Dell", "shahzeb" => "HP", "amir" => "Lenovo");

    // Sort associative arrays in ascending order, according to the value
    // asort($laptops);

    // Sort associative arrays in ascending order, according to the key
    // ksort($laptops);

    // Sort associative arrays in descending order, according to the value
    // arsort($laptops);


    // Sort associative arrays in descending order, according to the key
    krsort($laptops);

        echo "<pre>";
        print_r($laptops);
        echo "</pre>";
        
    ?>
</body>
</html>