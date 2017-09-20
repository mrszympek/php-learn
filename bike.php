<?php

class Bike {

    private $productionDate;
    private $brand;
    private $owner;

    public function __construct($brand) {
        $this->setBrand($brand);
    }

    public function setProductionDate($date) {
        $this->productionDate = $date;
    }

    public function getAge() {
        if($this->productionDate) {
            return date('Y') - $this->productionDate;
        }

        return false;
    }

     public function setOwner($owner) {
        $this->owner = $owner;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }
}