<?php 
    namespace myArea;
    function myValid(){
        return __NAMESPACE__;
    }

  
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- PHP Constants -->
<!-- Constants are like variables, except that once they are defined they cannot be changed or undefined. -->
<?php 
    // PHP Constants
    // A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
    // A valid constant name starts with a letter or underscore (no $ sign before the constant name).
    // Note: Unlike variables, constants are automatically global across the entire script.

    // how to create the constant
    // Create a PHP Constant
    // To create a constant, use the define() function.
    // Syntax
    // define(name, value);
//     Parameters:
// name: Specifies the name of the constant
//value: Specifies the value of the constant

    // Example of constant 

    define("txt", "Hello from from php. Welcome to my development from php");
    define("num", 50);
    define("num1", 50);
    print txt;
    echo "<br>";
    print num * num1;
    echo "<br><br>";

    // PHP const Keyword
    // You can also create a constant by using the const keyword.
    // Create a case-sensitive constant with the const keyword:

        const MyCar = "Monster Truck";
        const Num = 2025;
        const Num1 = 2003;
        const name = "VY";
        echo MyCar;
        echo "<br>";
        print Num - Num1;
        echo "<br>";
        echo name;

        echo "<br><br>";

        // PHP Constant Arrays
        // From PHP7, you can create an Array constant using the define() function.

        define("Cars", [
            "BMW", "Volvo", "Lambohini", "Masda"
        ]);
        print Cars[1];

        print "<br><br>";
        // Constants are Global
// Constants are automatically global and can be used across the entire script.
// Example
// This example uses a constant inside a function, even if it is defined outside the function:

    define("fruits", [
        "Apple", "Orange", "Grape", "Pineapple", "Dragon-fruit"
    ]);
    define("text", "Hi o sml ler lork nis b sl tea o mneak kot na bby");

    function MyFruit(){
        // print fruits[4];
        echo text;
    }
    MyFruit();        
?>

<!-- PHP Predefined Constants -->
<!-- PHP has nine predefined constants that change value depending on where they are used, also called the "magic constants". -->
<!-- These magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant. -->

<!-- Magic Constants -->
<!-- Here are the magic constants, with descriptions and examples: -->
 <br><br>
 <?php 
    // Constant	Description	
    // __CLASS__	If used inside a class, the class name is returned.	

    class Fruits {
        public function myValue(){
        return __CLASS__;
        }
    }
        $kiwi = new Fruits();
        echo $kiwi->myValue();      
        echo "<br>";

        class Foods {
            public function myLam(){
                return __CLASS__;
            }
        }
        $wamki = new Foods();
        echo $wamki->myLam();
        echo "<br>";
        class Videos {
            public function myVideo(){
                return __CLASS__;
            }
        }
        $kami = new Videos();
        echo $kami->myVideo();
        echo "<br><br>";
    // __DIR__	The directory of the file.	
    echo __DIR__;
    echo "<br>";
    // __FILE__	The file name including the full path.	
    echo __FILE__;
    echo "<br>";
    // __FUNCTION__	If inside a function, the function name is returned.	
    function Computer(){
        return __FUNCTION__;
    }
    echo Computer();
    echo "<br>";
    // __LINE__	The current line number.	
    echo __LINE__;
    echo "<br>";
    // __METHOD__	If used inside a function that belongs to a class, both class and function name is returned.
    class Phone {
        public function myPhones(){
            return __METHOD__;
        }
    }	
    $nami = new Phone();
    echo $nami->myPhones();
    echo "<br>";
    // __NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
    
    print myValid();
    echo "<br><br>";
    // __TRAIT__	If used inside a trait, the trait name is returned.	
    trait message1{
        public function msg1(){
            return __TRAIT__;
        }
    }

    class welcome {
        use message1;
    }
    $obj = new welcome();
    echo $obj->msg1();
    // ClassName::class	Returns the name of the specified class and the name of the namespace, if any.
    namespace myArea;

class Fruitse {
  public function myValues(){
    return Fruits::class;
  }
}
$kiwi = new Fruitse();
echo $kiwi->myValues();
 ?>
</body>
</html>