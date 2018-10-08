<?php


class TheRoom extends TheAbstract {

    function __construct($length = 30, $height = 15, $width = 30, $equipment = [],$price = 70){
        $this->height=$height;
        $this->length=$length;
        $this->width=$width;
        $this->equipment=$equipment;
        $this->price=$price;
    }

    public function outputProductInfo(){
        return "Our Domain \"". get_called_class() ."\" is the luxurious choice of real estate for a
                hamster owner. It features a length of ".$this->length." cm, a width of ".$this->width." cm and a
                height of ".$this->height." cm. All in all: it's a full-fledged house for your pet.
                It is available for the low price of EUR ".$this->price.",-";
    }

    function getSpecialEquipment(){
        return $this->equipment;
    }

    function calculateArea(){
        return (($this->length)*($this->width));
    }
}