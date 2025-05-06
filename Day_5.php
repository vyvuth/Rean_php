<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- PHP - Concatenate Strings  -->
 <?php 
    // String Concatenation => combine two string in one string by using (.) operator
    // EAMPLE1 
    $x = "Hello ";
    $y = "World from php";
    $z = $x . $y;
    print $z;
    echo"<br>";
    $txt1 = "Lorem, ipsum dolor";
    $txt2 = "Lorem ipsum dolor sit amet.";
    $txt = $txt1 . " " . $txt2;
    echo $txt;
     echo "<br>";
     $text1 = "hi oun sml";
     $text2 = "b sl tea oun mnek kot";
     $text3 = "$text1 $text2";
     print $text3;
 ?>
 <br><br>
 <!-- PHP - Slicing Strings -->
  <?php 
    // Slicing
    // You can return a range of characters by using the substr() function.
    // Specify the start index and the number of characters you want to return.

    $tz = "Hello world";
    print substr($tz, 11);  // put only the index that you want to display on browser
                            // but for method substr() to slice from the start 

    // Slice to the End
    // By leaving out the length parameter, the range will go to the end:
    echo"<br><br>";
    $test1 = "Hello world from php";
    echo substr($test1,10);
    echo "<br><br>";

    // Slice From the End
    // Use negative indexes to start the slice from the end of the string:
    
    $test2 = "Hi world";
    print substr($test2,-5, 3);
    echo "<br><br>";


    // Negative Length
    // Use negative length to specify how many characters to omit, starting from the end of the string:

        $xs = "Hi, how are you?";
        echo substr($xs, 5, -3);
  ?>
 
 <br><br>
 <!-- PHP - Escape Characters -->
  <?php 
    // Escape Character
    // To insert characters that are illegal in a string, use an escape character.
    // An escape character is a backslash \ followed by the character you want to insert.
    // An example of an illegal character is a double quote inside a string that is surrounded by double quotes:

    $test3 = "We are the so-called \"Vikings\" from the north.";
    print $test3;
    
    // Escape Characters
    // Other escape characters used in PHP:

    // Code	Result	Try it
// \'	Single Quote	
// \"	Double Quote	
// \$	PHP variables	
// \n	New Line	
// \r	Carriage Return	
// \t	Tab	
// \f	Form Feed	
// \ooo	Octal value	
// \xhh	Hex value

        echo "<br><br>";
        // PHP Number 
        // for Integer 
        $as = 2356;
        echo var_dump(is_int($as));

        echo "<br><br>";

        // for float 
        $as = 2356.6712;
        echo var_dump(is_double($as));

        echo "<br><br>";

        // PHP Numerical Strings
        // The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.

        $ask = "hello";
        print var_dump(is_numeric($ask));

        echo "<br><br>";

        // PHP Casting Strings and Floats to Integers

        $cv = "237898.345";
        $int_val = intval($cv);
        print $int_val;
        // echo $cv;
  ?>
</body>
</html>