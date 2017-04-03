<?php
	// This is the file for the parent class

	class ParentClass {
		protected $firstName;
		protected $lastName;
		protected $pittsburghName;

		public function __construct($firstName, $lastName, $pittsburghName) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->pittsburghName = $pittsburghName;
		}

		public function setFirstName($first) {
			$this->firstName = $first;
		}

		public function setLastName($last) {
			$this->lastName = $last;
		}

		public function setPghName($pgh) {
			$this->pittsburghName = $pgh;
		}

		public function getFirstName() {
			return $this->firstName;
		}

		public function getLastName() {
			return $this->lastName;
		}

		public function getPghName() {
			return $this->pittsburghName;
		}

		public function __toString() {
			$fullName = $this->getFirstName() . " \"" . $this->getPghName() . "\" " . $this->getLastName();
			return $fullName;
		}
	}
