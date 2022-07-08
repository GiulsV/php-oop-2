<?php
    include_once __DIR__ . '/product.php';

    class User {
        public $username;
        public $email;
        public $address;
        public $creditCardExpired;
        public $products = [];
        protected $signed = false;
        protected $discount = 0;

        
        public function addProduct($_name, $_type, $_price, $_signed){
            $product = new Product($_name, $_type, $_price, $_signed);
            if(!$this->creditCardExpired){
                $this->products[] = $product;
                return $product;
            } else{
                throw new Exception('Your credit card is expired or your date of expiration is wrong. Try again.');
            }
        }

    }

    

    class SignedUser extends User {
        protected $signed = true;




        public function setDiscount(){
            return $this->discount = 20;
        }

          

    }
?>