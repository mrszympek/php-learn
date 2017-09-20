<?php

class Bike extends Vehicle {

    private $productionDate;

    protected $wheelsCount = 2;

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
}