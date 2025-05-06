<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- PHP if...else Statements -->
 <?php 
    // PHP - The if...else Statement
    // The if...else statement executes some code if a condition is true and another code if that condition is false.
    
    $t = date("H");

    if ($t < "1"){
        echo "Have a good day!";
    }else{
        print "Have a good night!";
    }
    print "<br>";
    $t1 = "Inrelationship";
    if ($t1 >= "13"){
        print "My girlfrien is own Mech😘";
    }else{
        print "I am single😊";
    }
    print "<br>";
    $t2 =  date("s");
    if ($t2 > "10"){
        echo "Have a good morning";
    }elseif ($t2 < "20"){
        echo "Have a good day!";
    }else{
        print "Have a good night!";
    }
 ?>
 <br><br>
 <!-- PHP Shorthand if Statements -->
  <?php 
    // Short Hand If
    // To write shorter code, you can write if statements on one line.
    $a = 15;
    if ($a > 10) $b = "Hello guy";
    print $b;
    print "<br>";


    // Short Hand If...Else
    // if...else statements can also be written in one line, but the syntax is a bit different.
    $a1 = 5;
    $b1 = $a1 > 10 ? "Hello" : "GoodBye";
    print $b1;
    print "<br>";


    // Nested If
    // You can have if statements inside if statements, this is called nested if statements.
    $a2 = 13;
    if ($a2 > 10){
        echo "Above 10";
        if ($a2 > 20){
            echo "Above 20";
        }
    }else{
        echo "but not above 20";
    }
  ?>
</body>
</html>