<?php

class car {

    public $brand = '';
    public $type = '';
    public $production_date = null;
    public $owner = '';


    public function set_brand($new_brand) {
        $brand = $new_brand;
        echo $brand . '<br>';
    }

    public function set_type($new_type) {
        $type = $new_type;
        echo $type . '<br>';

    }

     public function set_production_date($new_date) {
        $production_date = $new_date;
        echo $production_date . '<br>';

    }

     public function set_owner($new_owner) {
        $owner = $new_owner;
        echo $owner . '<br>'; 

    }

}


