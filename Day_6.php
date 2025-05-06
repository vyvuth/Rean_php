<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- PHP Casting -->
 <?php 
    // Change Data Type
    // Casting in PHP is done with these statements:
    
    // (string) - Converts to data type String
    // (int) - Converts to data type Integer
    // (float) - Converts to data type Float
    // (bool) - Converts to data type Boolean
    // (array) - Converts to data type Array
    // (object) - Converts to data type Object
    // (unset) - Converts to data type NULL

    // Cast to String
    // To cast to string, use the (string) statement:
    $a = 5; //int
    $b = 23.54; // float

    $a1 = (string) $a;
    $b1 = (string) $b;
    var_dump( $a1 );
    var_dump( $b1 );
    echo"<br><br>";

    // Cast to Integer
    // To cast to integer, use the (int) statement:

    $c = "34";
    $c1 = (int) $c;
    var_dump( $c1 );    
 ?>
 <br><br>
 <!-- PHP Math -->
  <?php 
    // PHP pi() Function
    // The pi() function returns the value of PI:

    echo(pi());
    echo "<br><br>";


    // PHP min() and max() Functions
    // The min() and max() functions can be used to find the lowest or highest value in a list of arguments:
    echo(max(12, 23, 0, 67,1));
    echo "<br>";
    echo(min(90, 0, 66, 1, 2, 5, -80));
    echo "<br><br>";

    // PHP abs() Function
    // The abs() function returns the absolute (positive) value of a number:
    print(abs(-7.9)); // convert from negative to positive of number
    echo"<br>";
    print(abs(-1200));
    echo "<br><br>";


    // PHP sqrt() Function
    // The sqrt() function returns the square root of a number:

    print(sqrt(121));
    echo "<br><br>";

    print(round(1.5));
    echo "<br>";
    print(round(0.85));
    echo "<br><br>";


    // Random Numbers
    // The rand() function generates a random number:
   
    echo(rand());
    echo "<br>";
    print(rand(10, 100));
        
  ?>
</body>
</html>