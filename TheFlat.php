<?php


class TheFlat extends TheAbstract {

    function __construct($length = 10, $height = 10, $width = 20, $equipment = [],$price = 30){
        $this->height=$height;
        $this->length=$length;
        $this->width=$width;
        $this->equipment=$equipment;
        $this->price=$price;
    }

    public function outputProductInfo(){
        return "Our Domain \"". get_called_class() ."\" is the basic choice of real estate for a
                hamster owner. It features a length of ".$this->length." cm, a width of ".$this->width." cm and a
                height of ".$this->height." cm. It is available for the low price of EUR ".$this->price.",-";

    }

    function getSpecialEquipment(){
        return $this->equipment;
        }

    function calculateArea(){
        return (($this->length)*($this->width));
    }
}


