<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Php Function  -->
    <?php 
        // create a function 
        function loadPage(){
            echo "Hello create a function.";
            echo "<br>";
            $a = 12;
            $b = 10;
            print $a+$b;
        }
        loadPage();
        echo "<br><br>";

        // function has one para
        function familyName($fname){
            print "$fname is a teacher in my family <br>";
        }
        familyName("Jonh");
        familyName("Dara");
        familyName("Pisey");
        familyName("Leakhena");

        echo "<br><br>";

        // function has two para 
        function jobGroup($name, $year){
            echo "$name is a professional education for English department in $year  <br>";
        }
        jobGroup("Tola", "2012");
        jobGroup("Bopha", "2023");
        jobGroup("Minea", "2024");
        jobGroup("VY","2025");
        jobGroup("Mech", "2025");

        echo "<br><br>";

        // default argument value
        function height($minHeight = 50){
            echo "The height is: $minHeight <br>";
        }
        height(123);
        height(53);
        height();
        height(78);
        height(103);

        echo "<br><br>";

        // function-returning value 
        function sum($x,$y){
            $z = $x + $y;
            return $z;
        }

        print "23 + 34 = " . sum(23, 34)  . "<br>";
        print "43 + 12 = " . sum(43, 12) . "<br>";
        print "2025 + 2024 = " . sum(2025, 2024) . "<br>";

        echo "<br><br>";

        // passing argument by reference 
        function addNum(&$values){
            $values +=5;
        }

        $num = 2025;
        addNum($num);
        echo $num;

        echo "<br><br>";

        // variable number of argument 
        function sumMynum(...$c){
            $n = 0;
            $len = count($c);

            for($i = 0; $i < $len; $i++){
                $n += $c[$i];
            }
            return $n;
        }

        $w = sumMynum(2,4,6,12,45,100,68);
        print $w;

    ?>
</body>
</html>