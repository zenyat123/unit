<?php

	use PHPUnit\Framework\TestCase;

	class ExampleTest extends TestCase
	{

		public function testTrue()
		{

			$this->assertTrue(true);

		}

		public function testFalse()
		{

			$this->assertFalse(false);

		}

		public function testEquals()
		{

			$result = 12 + 8;

			$this->assertEquals($result, "20"); // ==

		}

		public function testSame()
		{

			$result = 12 + 8;

			$this->assertSame($result, 20); // ===

		}

		public function testArray()
		{

			$this->assertIsArray([]);

		}

		public function testBool()
		{

			$this->assertIsBool(true);

		}

		public function testInt()
		{

			$this->assertIsInt(20);

		}

		public function testString()
		{

			$this->assertIsString("Texto");

		}

		public function testEmpty()
		{

			$this->assertEmpty([]);

		}

		public function testCount()
		{

			$this->assertCount(2, ["Azul", "Amarillo"]);

		}

		public function testHasKey()
		{

			$this->assertArrayHasKey("color", ["color" => "Azul"]);

		}
		
	}