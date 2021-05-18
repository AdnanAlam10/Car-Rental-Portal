<?php 

class CarTest extends \PHPUnit\Framework\TestCase {
    
    protected $car;

    public function setUp(): void {
        $this->car = new \App\Classes\Car;
    }

    public function testBrand() {

		$this->car->setBrand('BMW');
		
		$this->assertEquals($this->car->getBrand(), 'BMW');
	}
    
    public function testModel() {

		$this->car->setModel('M5');
		
		$this->assertEquals($this->car->getModel(), 'M5');
	}

    public function testType() {

		$this->car->setType('Sedan');
		
		$this->assertEquals($this->car->getType(), 'Sedan');
	}

    public function testTransmission() {

		$this->car->setTransmission('Automatic');
		
		$this->assertEquals($this->car->getTransmission(), 'Automatic');
	}

    public function testNumberofseats() {

		$this->car->setNumberofseats(4);
		
		$this->assertEquals($this->car->getNumberofseats(), 4);
	}

    public function testPrice() {

		$this->car->setPrice(500);
		
		$this->assertEquals($this->car->getPrice(), 500);
	}

}