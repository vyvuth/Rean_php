<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Days_3 -->
    <!-- <?php 
        // a variable with two echo
        $txt = "Hello World from PHP <br>";
        echo $txt;
        echo $txt;

        $num = "234 <br>";
        echo $num;
        echo $num;
    ?>
    <?php 
        // using print with variable single-quote
        $text = "Love you PHP";
        $TXT = "Do you love me PHP?";
        print '<h1>' . $text . '</h1>';
        print '<h2>'. $TXT .'</h2>';
    ?> -->
    <?php 
        // PHP Data Type
        // Getting data type by using var_dump('');
        // $num1 = 4;
        // $num2 = 23.56;
        // $num3 = 942003;
        // $name1 = "O mech";
        // $bool1 = true;
        // $bool2 = false;
        // var_dump($num1);
        // echo "<br>";
        // var_dump($num2);
        // echo "<br>";
        // var_dump($num3);
        // echo "<br>";
        // var_dump($name1);
        // echo "<br>";
        // var_dump($bool1);
        // echo "<br>";
        // var_dump($bool2);


        //PHP Array 
        // $Cars = array("MBW", "vOLVO", "Toyota");
        // var_dump($Cars);


        // PHP Object
//         ជំហាន	ពន្យល់
// 1	បង្កើត class Moto
// 2	បង្កើត properties color & model
// 3	បង្កើត constructor ដើម្បីបញ្ចូលតម្លៃ
// 4	បង្កើត method message() ដើម្បីបង្ហាញពណ៌ & ម៉ូដែល
// 5	បង្កើត object $myMoto
// 6	var_dump() បង្ហាញអ្វីមានក្នុង object
// 7	message() ត្រូវ echo ដើម្បីឲ្យបង្ហាញលទ្ធផល
            class Moto {
                // create property
                public $color;
                public $model;
                public $year;
                // this keyword to create object that property as the parameter
                public function __construct($color, $model, $year){
                    // store value in object
                    $this->color = $color;
                    $this->model = $model;
                    $this->year = $year;
                    // this we call current object
                }
                // show data 
                public function message(){
                    return "My moto is ". $this->color ."". $this->model . "" . $this->year . "!";
                }

            }
            // merch value to display
            $myMoto = new Moto("Brown" , "Click", 2020);
            var_dump($myMoto);
            $myMoto->message();
        
    ?>
    <br><br>
    <?php 
        // php object 
        class Cars{
            public $color;
            public $model;
            public $year;
            public $price;
           public function __construct($color, $model, $year, $price){
            $this->color = $color;
            $this->model = $model;
            $this->year = $year;
            $this->price = $price;
           }
           public function message(){
            return "My car is " . $this->color . "" . $this->model . "". $this->year . "" . $this->price ."!";
           }
        }
        $My_car = new Cars("Green", "BMW", 2025, 534999.89);
        var_dump($My_car);
        $My_car->message();
    
    ?>
    <br><br>
    <?php 
        // PHP NULL Value
        $x = 5;
        $x = null;
        $y = "HI o sml rbos b";
        $y = null;
        var_dump($x);
        echo"<br>";
        var_dump($y);
    ?>
    <br><br>
    <?php 
        // Change Data Type

        $test = 5;
        var_dump($test);
        echo"<br>";


        $test = "O ACH RORNG JAM WEDDING WITH B BAN OT BBY B SL O KLANG NAS❤️😘";
        var_dump($test);


        // PHP Resource
            // The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
            // A common example of using the resource data type is a database call.
            // We will not talk about the resource type here, since it is an advanced topic.



    ?>
    
</body>
</html>