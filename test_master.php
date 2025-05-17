<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $num = 11;
        
        for($i = 1; $i <=10; $i++){
            $result = $num*$i;
            print "$num x $i = $result <br>";
        }

        echo "<br><br>";

        $khmer = ['០','១','២','៣','៤','៥','៦','៧','៨','៩'];

        function numKhmer($num_2, $numGit){
            global $khmer;
            $Khmernumberal = '';
            foreach(str_split((string)$num_2) as $numGit){
                $Khmernumberal .= $khmer[$numGit];
            }
            return $Khmernumberal;
        }

        $var = 12;
        for($r = 1; $r <= 10; $r++){
            $gets = $var*$r;
            echo numKhmer($var, $khmer) . " x " . numKhmer($r, $khmer) . " = " .  numKhmer($gets, $khmer) . "<br>";
        }
    ?>
</body>
</html>