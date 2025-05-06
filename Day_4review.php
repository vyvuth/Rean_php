<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- string in Php -->
     <?php 
        // string length in php 
        $txt = "Hello world from php in length";
        print strlen($txt);
        echo "<br>";

        // string word count in php 
        $txt1 = "Hello from php test.";
        echo str_word_count($txt1);
        echo "<br>";

        $txt2 = "Hello b are you here";
        print strpos(trim($txt2), "o");
     ?>
        <br><br>
     <!-- string modify  -->
      <?php 
    //   string upper case 
        echo strtoupper("i love you so much my cuties ");
        echo "<br>";

        // string lower case 
        print strtolower("B SL OUN SML KLNG KLNG NAS CAN YOU MARRY WITH ME BABY");
        echo "<br>";

        // string replace 
        $x = "hello";
        $y = 123;
        // echo $x;
        // echo $y;
        print str_replace(123, 2003, $y); 
        echo "<br>";

        // string reverse  
        $xy = 124356;
        // echo $xy;
        print strrev($xy);
        echo "<br>";
        echo "<br>";

        // convert string into array 
        $fruit = "Apple, Banana, Orange, Papaya, Grape, Pineapple, Dragon_fruit";
        echo $fruit;
        echo "<br><br>";
        $fruits = explode(" ", $fruit);
        print_r($fruits);

        echo "<br><br>";
        $car = "Toyota, BMW, MG, Morning, Hyoundai, Lambohini";
        echo $car;
        echo "<br><br>";
        $cars = explode (" ", $car);
        print_r($cars);
        
      ?>
</body>
</html>