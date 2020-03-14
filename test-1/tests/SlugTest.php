<?php

	use PHPUnit\Framework\TestCase;

	class SlugTest extends TestCase
	{

		public function testRender()
		{

			require "app/Slug.php";

			$slug = new Slug("Cursos de Laravel");

			$expected = "cursos-de-laravel";

			$this->assertEquals($slug->render(), $expected);

		}

	}