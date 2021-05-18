<?php 

namespace App\Classes;

class Car {
    private $brand;
    private $model;
    private $type;
    private $transmission;
    private $numberOfSeats;
    private $price; 

    public function setBrand($brand_) {
        $this->brand = $brand_;
    }
    public function getBrand() {
        return $this->brand;
    }

    public function setModel($model_) {
        $this->model = $model_;
    }
    public function getModel() {
        return $this->model;
    }

    public function setType($type_) {
        $this->type = $type_;
    }
    public function getType() {
        return $this->type;
    }

    public function setTransmission($transmission_) {
        $this->transmission = $transmission_;
    }
    public function getTransmission() {
        return $this->transmission;
    }

    public function setNumberofseats($numberOfSeats_) {
        $this->numberOfSeats = $numberOfSeats_;
    }
    public function getNumberofseats() {
        return $this->numberOfSeats;
    }

    public function setPrice($price_) {
        $this->price = $price_;
    }
    public function getPrice() {
        return $this->price;
    }
}