<?php

abstract class TheAbstract{
    protected $width;
    protected $length;
    protected $height;
    protected $price;
    protected $equipment;

    abstract protected function outputProductInfo();
    abstract protected function getSpecialEquipment();
    abstract protected function calculateArea();
}