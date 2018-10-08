<?php


class ThePit extends TheAbstract{

    function __construct($length = 20, $equipment = [], $price = 300){
        $this->length = $length;
        $this->equipment = $equipment;
        $this->price = $price;
    }

    public function outputProductInfo(){
        return "Our newest Domain \"". get_called_class() ."\" is the extreme choice of real estate for a
                hamster owner. It features a sidelength of ".$this->length." cm. All in all: it's a full-fledged fighting cage for your pet.
                Let him be the next Karate Gold-medalist! It is available for the low price of EUR ".$this->price.",-";
    }

    public function getSpecialEquipment(){
        return $this->equipment;
    }

    public function calculateArea(){
        return ((2*(pow($this->length,2)))*(1+sqrt(2)));
    }
}
