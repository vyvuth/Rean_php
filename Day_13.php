<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
            // creating array 
        // Php Array of count()
        $car = array("volvo", "lambohini", "morning", "visto");
        print count($car);

        echo "<br><br>";
        // Php indexed array 
        $phone = array('Oppo', 'Samsung', 'Iphone', 'Xaimi');
        var_dump($phone);

        echo "<br><br>";

        // Access indexed array 
        $computer = array('Lannovo', 'MSI', 'Dell');
        print $computer[1];

        echo "<br><br>";
        // Czhange value 
        $people = array('Dara', 'Pisey', 'Kunthea', 'Thyda');
        $people[3] = 'Bopha';
        var_dump($people);

        echo "<br><br>";
        // Loop Through an Indexed Array 
        $food = array('pizza', 'pasta', 'chicken', 'burger');

        foreach($food as $x){
            print $x . "<br>";
        }

        echo "<br><br>";
        // array_push into array 
       $food = array('pizza', 'pasta', 'chicken', 'burger');
        array_push($food, 'khmer noodle', 'Chinese noodle', 'somloar korko');
        foreach($food as $x){
            print $x . "<br>";
        }
        
        echo '<br><br>';
        // PHP Associative Arrays, acess and change value array
        $staff = array('name' => 'VY', 'age' => '22', 'from' => 'preyveng');
        $staff['age'] = '19';
        var_dump($staff);
        echo '<br>';
        print $staff['age'];
        echo '<br><br>';

        foreach($staff as $y){
            print $y . "<br>";
        }

    ?>
</body>
</html>