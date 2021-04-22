<?php 

class Car {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllCars() {
        $this->db->query('SELECT * FROM cars ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function getCarName($id) {
        $this->db->query('SELECT brand, model FROM cars WHERE id = :id');

        $this->db->bind(':id', $id);

        $result = $this->db->single();
        return $result;
    }

    public function deleteCar($id) {
        $this->db->query('DELETE FROM cars WHERE id = :id');

        $this->db->bind(':id', $id);

        $this->db->execute();
    }

    public function addCar($data) {
        $this->db->query('INSERT INTO cars (brand, model, type, transmission, numberOfSeats, price) VALUES(:brand, :model, :type, :transmission, :numberOfSeats, :price)');

        $this->db->bind(':brand', $data['brand']);
        $this->db->bind(':model', $data['model']);
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':transmission', $data['transmission']);
        $this->db->bind(':numberOfSeats', $data['numberOfSeats']);
        $this->db->bind(':price', $data['price']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    
}