<?php

class Bike {

    private $productionDate;
    private $brand;
    private $owner;

    public function setProductionDate($date) {
        $this->productionDate = $date;
    }

    public function getAge() {
        return date('Y') - $this->productionDate;
    }

     public function setOwner($owner) {
        $this->owner = $owner;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }
}