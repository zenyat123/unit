<?php

	use PHPUnit\Framework\TestCase;
	use App\User;

	class UserTest extends TestCase
	{

		protected $user;

		public function setUp() : void
		{

			$this->user = new User;

		}

		public function testName()
		{

			$this->user->setName("Fabio");

			$this->assertEquals($this->user->getName(), "Fabio");

		}

		public function testSurname()
		{

			$this->user->setSurname("Zamora");

			$this->assertEquals($this->user->getSurname(), "Zamora");

		}

		public function testEmail()
		{

			$this->user->setEmail("zenyat123@gmail.com");

			$this->assertEquals($this->user->getEmail(), "zenyat123@gmail.com");

		}

		public function testGetFullName()
		{

			$this->user->setName("Fabio");

			$this->user->setSurname("Zamora");

			$this->assertEquals($this->user->getFullName(), "Fabio Zamora");

		}

		public function testFullNameEmpty()
		{

			$this->assertEmpty($this->user->getFullName());

		}

		public function testNameSurnameEmailWithoutSpaces()
		{

			$this->user->setName("   Fabio   ");
			$this->user->setSurname("   Zamora  ");
			$this->user->setEmail("   zenyat123@gmail.com   ");

			$this->assertEquals($this->user->getName(), "Fabio");
			$this->assertEquals($this->user->getSurname(), "Zamora");
			$this->assertEquals($this->user->getEmail(), "zenyat123@gmail.com");

		}
		
	}