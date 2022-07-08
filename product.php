<?php
    include_once __DIR__ . '/user.php';

    class Product {
        public $name;
        public $type;
        public $quantity;
        public $price;
        public $products = [];

        function __construct($_name, $_type, $_price, $_signed){
        $this->name = $_name;
        $this->type = $_type;
        $this->price = $_price;
    }



        public function getDiscount(){
            {
                if($signed = true){
                    $discount = 20;
                    return $this->price - ($this->price * $discount  / 100);
                }
            }
        }
        


    }

    class FoodProduct extends Product {
        public $size;
    }

    class GameProduct extends Product {
        public $color;
    }

    class DogBedProduct extends Product {
        public $size;

    }


?>