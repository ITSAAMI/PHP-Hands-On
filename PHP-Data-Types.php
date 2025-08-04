<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Types</title>
</head>
<body>
    <?php
    
    $var1 = "String"; 
    $var2 = 'string';
    $var3 = "<h1>string</h1>";

    $var4 = true;

    $var5 = 10;
    $var6 = 1.1;

    // $arr1 = array(12,1.4,"Sumthing", "Nathing");
    // echo "<pre>";
    // print_r($arr1);
    // echo "</pre>";
    
    // echo strlen($var1);
    // echo str_word_count($var1);
    // echo $arr1[3];


    // strrev() - Reverse a String
    // strpos() - Search For a Text Within a String
    // str_replace() - Replace Text Within a String

    // $str = "shahab khan";

    // echo $str_replace = str_replace("khan","Kapoor",$str);


    // $limit_test = 214748364834234433452345342535345345;

    // var_dump($limit_test);

    //     $new_var = 1.9e411;
    //     $org_no = 190000000000000027834523623045792352304956234785623478562348975623489623478956234789562389456234789623478956234789562348975;
        
    // var_dump($org_no)


    // $x = 5985;
    // var_dump(is_numeric($x));

    // $x = "5985";
    // var_dump(is_numeric($x));

    // $x = "59.85" + 100;
    // var_dump(is_numeric($x));

    // $x = "Hello";
    // var_dump(is_numeric($x));


    // Cast float to int
    // $x = 23465.768;
    // $int_cast = (int)$x;
    // echo $int_cast;

    // echo "<br>";

    // Cast string to int
    // $x = "23465.768";
    // $int_cast = (int)$x;
    // echo $int_cast;



    // Create a PHP Constant
    // define(name, value, case-insensitive)


    define("GREETING", "Welcome to Logicgigs Pvt Ltd!",true);
    // echo GREETING;
    echo greeting;



    ?>
</body>
</html>