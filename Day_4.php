<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- String in PHP  -->
     <?php 
        // focus on string 
        // Strings in PHP are surrounded by either double quotation marks, or single quotation marks.
        // Example:
        echo "Hello World from Php";
        echo "<br>";
        print "B sl o klang klang😘❤️";
        echo "<br>";

        // String Length
        // The PHP strlen() function returns the length of a string.
        
        echo strlen("hello world from IT kom sot");
        echo "<br>";


        // Word Count

        // The PHP str_word_count() function counts the number of words in a string.
        echo str_word_count("Hey bby I love you so much. Can you marry with me? o sml❤️😘");
        echo "<br>";
        print str_word_count("Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quidem animi consequatur ipsum voluptatum alias eaque quibusdam dolorum ab laudantium.");
        echo "<br>";


        // Search For Text Within a String
        // The PHP strpos() function searches for a specific text within a string.
        // If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.

        echo strpos("Hello world!", "world");
        echo "<br>";
        $x = 5;
        echo "The price is $x";
        echo "<br>";
        echo 'The price is $x';
     ?>
     <br><br>


     <!-- PHP - Modify Strings -->
     <!-- PHP has a set of built-in functions that you can use to modify strings. -->
      <?php 
    //    Upper Case
    // The strtoupper() function returns the string in upper case:
        echo strtoupper("hi php upper case");
        echo "<br>";
        print strtoupper("i love you o sml");

        echo "<br>";
        // Lower Case
        // The strtolower() function returns the string in lower case:
            $text = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima porro commodi vitae?";
            print strtolower($text);
            echo "<br>";
            print Strtolower("BBY CAN YOU MARRY WITH ME? ");
            echo "<br>";

            
            // Replace String
            // The PHP str_replace() function replaces some characters with some other characters in a string.
            $txt = "Hello o sml rbos b";
            // print $txt;
            print str_replace("Hello", "Hi", $txt);
            echo "<br>";
            print str_replace("sml","tepthyda mech", $txt);
            echo "<br>";
            echo "<br>";

            // Reverse a String
            // The PHP strrev() function reverses a string.
            $xt = "Hello php";
            echo strrev($xt);
            echo "<br>";
            print strrev("Lorem ipsum dolor sit amet consectetur.");

            echo "<br>";
            // Remove Whitespace
            // Whitespace is the space before and/or after the actual text, and very often you want to remove this space.
            $tr = " Hi bro what are you doing br ";
            echo trim($tr);

            echo "<br><br>";
            // Convert String into Array
            // The PHP explode() function splits a string into an array.
            // The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.

            $x = "Hello from Php developer";
            $y = explode(" ", $x);
            print_r($y);
            echo "<br><br>";
            $cv = "HELLO";
            $yes = explode(" ", $cv);
            print_r($yes);

            // print_r() use to display the result of convert a string into array

      ?>
     
</body>

</html>