<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
	
	public function testLogin(){
		$user = new \App\Models\user([]);
		$this->assertEquals("Login Successful", $user->login("tango1","789456"));
	}

	 public function testSearch(){
		$flight = new \App\Models\flight([]);
		$this->assertEquals("Flight Found", $flight->Search("553"));
	}
	
}