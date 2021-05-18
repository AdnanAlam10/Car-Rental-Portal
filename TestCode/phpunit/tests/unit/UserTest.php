<?php 


class UserTest extends \PHPUnit\Framework\TestCase {

	protected $user;
	
	public function setUp(): void {
		$this->user = new \App\Classes\User;
	}

	public function testUsername() {

		$this->user->setUsername('John10');
		
		$this->assertEquals($this->user->getUsername(), 'John10');
	}

	public function testPassword() {

		$this->user->setPassword('test1234');

		$this->assertEquals($this->user->getPassword(), 'test1234');
	}

	public function testEmail() {
		$this->user->setEmail('john@gmail.com');

		$this->assertEquals($this->user->getEmail(), 'john@gmail.com');

	}

	public function testAge() {
		$this->user->setAge(24);

		$this->assertEquals($this->user->getAge(), 24);

	}

	public function testPhonenumber() {
		$this->user->setPhonenumber(1728084441);

		$this->assertEquals($this->user->getPhonenumber(), 1728084441);

	}
}