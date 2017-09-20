<?php

class Person {

    private $name = null;
    private $birthDate = null;
    private $birthPlace = null;

    public function __construct($name, $birthDate = false) {
        $this->setName($name);

        if($birthDate) {
            $this->setBirthDate($birthDate);
        }
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setBirthDate($date){
        $this->birthDate = $date;
    }

    public function setBirthPlace($place){
        $this->birthPlace = $place;
    }
}