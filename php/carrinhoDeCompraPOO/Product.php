<?php 

    class Product {
        private int $id;
        private int $quantity;
        private string $name;
        private float $price;

        public function setId(int $id){
            $this->id = $id;
        }

        public function setName(string $name){
            $this->name = $name;
        }

        public function setQuantity(int $quantity){
            $this->quantity = $quantity;
        }

        public function setPrice(float $price){
            $this->price = $price;
        }

        public function getId() : int{
            return $this->id;
        }

        public function getName() : string{
            return $this->name;
        }

        public function getQuantity() : int{
            return $this->quantity;
        }

        public function getPrice() : float{
            return $this->price;
        }
    }