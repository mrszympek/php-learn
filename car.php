<?php

class Car extends Vehicle {

    private $type = null;
    private $productionDate = null;

    public function __construct($brand, $productionDate = false) {
        $this->setBrand($brand);

        if($productionDate) {
            $this->setProductionDate($productionDate);
        }
    }

    public function setType($type) {
        $this->type = $type;
    }

     public function setProductionDate($date) {
        $this->productionDate = $date;
    }

    
}


