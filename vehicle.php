<?php

class Vehicle {

    private $brand;
    private $owner;
    private $price;

    public static $euroPrice = 4.3;

    protected $wheelsCount = 4;

    public function setBrand($brand) {
        $this->brand = $brand;
    }
    
    public function setOwner($owner) {
        $this->owner = $owner;
    }

    public function getWheelsCount() {
        return $this->wheelsCount;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getPriceInEur(){
        return $this->price / self::$euroPrice;
    }
}