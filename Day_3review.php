<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Day_3review -->
    <?php 
        // Array in PHP
        $Cars = array("Toyoto", "BMW", "lEXIS", "MG", "Lambohini", "Maclearen");
        var_dump($Cars);
        // echo $Cars; can not display array in echo
        // print $Cars; can not display array in echo
    ?>
    <br><br>
    <?php
        // Object in PHP of food
        class food{
            public $name;
            public $taste;
            public $size;
            public $price;
            public function __construct($size, $price, $name, $taste){
                $this->name = $name;
                $this->taste = $taste;
                $this->size = $size;
                $this->price = $price;
            }
            public function message(){
                return "Your food ordering is " . $this->name . "" . $this->taste . "" . $this->size . "" . $this->price . "";
            }
        }
        $clientFood = new food("Burger", "Chicken", "2xl", 21);
        var_dump($clientFood);
        $clientFood->message();
        //new => create new object (Oop) in PHP
        // new ប្រើសម្រាប់បង្កើតវត្ថុថ្មីពី class
        // វាជាគន្លឹះសំខាន់ក្នុងការប្រើ Object-Oriented Programming
        // ជាភាសាខ្មែរ អាចនិយាយថា "បង្កើតវត្ថុថ្មី"


    ?>
    <br><br>
    <?php 
        // Object in PHP of fruit 
        class fruit{
            public $fName;
            public $size;
            public $price;

            public function __construct($fName, $size, $price){
             $this->fName = $fName;
             $this->size = $size;
             $this->price = $price;
            }
            public function message(){
                return "Your fruit ordering is : " . $this->fName . "". $this->size . "" . $this->price . "";
            }
        }
        $clientFruit = new fruit("Dragon fruit", 1 ,7500);
        $clientFruits = new fruit("Papaya",3 ,17500);
        var_dump($clientFruit);
        var_dump($clientFruits);
        $clientFruit->message();
    ?>
</body>
</html>