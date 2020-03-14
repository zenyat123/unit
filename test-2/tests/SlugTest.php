<?php

	use PHPUnit\Framework\TestCase;
	use App\Slug;

	class SlugTest extends TestCase
	{

		public function testRender()
		{

			$slug = new Slug("Cursos de Laravel");

			$expected = "cursos-de-laravel";

			$this->assertEquals($slug->render(), $expected);

		}

		public function testRenderWithoutSpaces()
		{

			$slug = new Slug("   Cursos de Laravel   ");

			$expected = "cursos-de-laravel";

			$this->assertEquals($slug->render(), $expected);

		}

	}