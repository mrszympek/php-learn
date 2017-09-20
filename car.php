<?php

class Car {

    private $brand = null;
    private $type = null;
    private $productionDate = null;
    private $owner = null;

    public function __construct($brand, $productionDate = false) {
        $this->setBrand($brand);

        if($productionDate) {
            $this->setProductionDate($productionDate);
        }
    }


    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setType($type) {
        $this->type = $type;
    }

     public function setProductionDate($date) {
        $this->productionDate = $date;
    }

     public function setOwner($owner) {
        $this->owner = $owner;
    }
}


