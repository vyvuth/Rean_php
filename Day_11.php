<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- PHP do while Loop -->
 <?php 
    // The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.
    // The PHP do...while Loop
    // The do...while loop will always execute the block of code at least once, it will then check the condition, and repeat the loop while the specified condition is true.

    $i = 2;
    do{
        print $i;
        $i++;
    }while($i < 10);
    echo "<br>";
    $i_1 = 0;
    do{
        print $i_1;
        $i_1++;
    }while($i_1 <= 10);
    echo "<br><br><br>";

    for($i_2 = 0; $i_2 <= 10; $i_2++){
        if ($i_2 == 5) continue;
        print "The numberic is: " . $i_2 . "<br>";
    }

    echo "<br><br>";
    // The foreach Loop on Arrays

    $color = array("red", "blue", "white", "yellow", "purple");

    foreach ($color as $l){
        print "The color is: " . $l ."<br>";
    }
    echo "<br>";

    $fruit = array(
        "Apple",
        "Banana",
        "Orange",
        "Mango",
        "Pineapple",
        "Strawberry",
        "Grapes",
        "Watermelon",
        "Peach",
        "Cherry"
    );

    foreach ($fruit as $fruits){
        echo "The fruits are: " . $fruits ."<br>";
    }
    echo "<br>";
    // key and value 

    $member = array("Peter"=>"23", "dogger"=>"34");
    foreach ($member as $a => $b){
        print "Name: " . "$a : $b" ."<br>";
    }
    echo "<br><br>";
    $num = 2;
    for($num_1 = 1; $num_1 <=10; $num_1++){
        $result = $num*$num_1;
        print "$num x $num_1 = $result <br> "; 
    }
    echo "<br><br>";
    $khmerDigits = ['០','១','២','៣','៤','៥','៦','៧','៨','៩'];
    function toKhmer($numbers, $numChar){
        global $khmerDigits;
        $KhmerNumber = '';
        foreach(str_split((string)$numbers) as $numChar ){
            $KhmerNumber .= $khmerDigits[$numChar];
        }
        return $KhmerNumber;
    }
    $av = 3;
    for($q = 1; $q <= 10; $q++){
        $result = $av*$q;
        print toKhmer($av, $khmerDigits)     . "x" .    toKhmer($q, $khmerDigits)    . "=" .    toKhmer($result, $khmerDigits) . "<br>";
    }

 ?>

</body>
</html>