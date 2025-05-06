<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- PHP switch Statement -->
    <?php 
        // The switch statement is used to perform different actions based on different conditions.
        // The PHP switch Statement
        // Use the switch statement to select one of many blocks of code to be executed.
        // Syntax
        // switch (expression) {
        //     case label1:
        //       //code block
        //       break;
        //     case label2:
        //       //code block;
        //       break;
        //     case label3:
        //       //code block
        //       break;
        //     default:
        //       //code block
        //   }          
        // This is how it works:
        // The expression is evaluated once
        // The value of the expression is compared with the values of each case
        // If there is a match, the associated block of code is executed
        // The break keyword breaks out of the switch block
        // The default code block is executed if there is no match
        // 1. Example
        $favColor = "green";

        switch($favColor){
            case "red":
                print "Your favorite color is red.";
                break;
                case "blue":
                    print "Your favorite color is blue.";
                    break;
                    case "green":
                        print "Your favorite color is green.";
                        break;
                             default:
                             print "Your favorite color is neither red, blue nor green!";
                            break;
        }
        echo "<br><br>";
        $myGrilfriend = "single";

        switch($myGrilfriend){
            case "Inrelationship":
                echo "Own Mech jea ss rbos b tea mnek kot😘❤️"; 
                break;
                case "single":
                    echo "No ss jorb dai";
                    break;
                    default:
                    echo "Are you gay guy😂";
                    break;
        }
        
        // The break Keyword
        // When PHP reaches a break keyword, it breaks out of the switch block.
        // This will stop the execution of more code, and no more cases are tested.
        // The last block does not need a break, the block breaks (ends) there anyway.

//         The break Keyword
// When PHP reaches a break keyword, it breaks out of the switch block.
// This will stop the execution of more code, and no more cases are tested.
// The last block does not need a break, the block breaks (ends) there anyway.
   echo "<br><br><br>";
   $d = 5;
   switch($d){
    default:
        print "Looking forward to the next days guy!";
        break;
    case 0:
        print "Today is sunday";
        break;
    case 4:
        print "number 4 is true";
        break;
    case 5:
        print "b sl tea own Mech mnek kot pov meas";
        break;         
   }
   echo "<br><br><br>";
//    Common Code Blocks
    
    $a = "";
    switch($a){
        case "1":
        case "3":
        case "2":
            print "Hi o sml b";
            break;
        case "5":
        case "12":
            print "Are you stupid guy";
            break;
        default:
          print "Go away from me!";
    }
                
    ?>
    <br><br>
<!-- PHP Loops -->
 <?php 
            // PHP Loops
    // Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.
    // Loops are used to execute the same block of code again and again, as long as a certain condition is true.
    // In PHP, we have the following loop types:
    // while - loops through a block of code as long as the specified condition is true
    // do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
    // for - loops through a block of code a specified number of times
    // foreach - loops through a block of code for each element in an array

    // PHP while Loop = it work if it get a specific condition is true
    $i = 1;
    while ($i < 5){
        echo $i;
        $i++;
    }
    echo "<br>";

    // break statement 
    $i_1 = 2;
    while ($i_1 < 6){
        if ($i_1 == 3) break;
        print $i_1;
        $i_1++;
    }
    echo "<br>";
    $i_2 = 2;
    while ($i_2 < 5){
        $i_2++;
        if ($i_2 == 2) continue;
        print $i_2;
        
    }
    echo "<br>";

    // Alternative Syntax 

    $i_3 = 0;
    while ($i_3 < 7):
        print $i_3;
        $i_3++;
    endwhile;

    echo "<br>";

    // Step 10
// If you want the while loop count to 100, but only by each 10, you can increase the counter by 10 instead 1 in each iteration:

    $j = 0;
    while ($j < 100){
        $j+=10;
        print $j ."<br>" ;
    }
    
 ?>
</body>
</html>