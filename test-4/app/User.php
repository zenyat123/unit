<?php

	namespace App;

	class User
	{

		protected $name;
		protected $surname;
		protected $email;

		public function setName($parameter)
		{

			$this->name = trim($parameter);

		}

		public function getName()
		{

			return $this->name;

		}

		public function setSurname($parameter)
		{

			$this->surname = trim($parameter);

		}

		public function getSurname()
		{

			return $this->surname;

		}

		public function setEmail($parameter)
		{

			$this->email = trim($parameter);

		}

		public function getEmail()
		{

			return $this->email;

		}

		public function getFullName()
		{

			return trim($this->name . " " . $this->surname);

		}

	}