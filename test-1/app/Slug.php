<?php

	class Slug
	{

		protected $original;

		public function __construct($parameter)
		{

			$this->original = $parameter;

		}

		public function render()
		{

			$slug = str_replace(" ", "-", $this->original);

			return strtolower($slug);

		}

	}