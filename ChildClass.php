<?php
	// this file will extend ParentClass.php

	class ChildClass extends ParentClass {

		public $Pittsburghese = array(
		"Sahth O",
		"North O",
		"Hunnert Dollars",
		"Yagottabekidden",
		"Airyago",
		"Terrible Tahl",
		"Primanis",
		"Gian' Iggles",
		"Wach Da Stillers",
		"Dahn Nair",
		"Gotta Work Aht",
		"Gitdahellaht",
		"Yinz Guys",
		"Sahthside",
		"Da Strip",
		"Hit Da Bricks",
		"Jeez-o-man",
		"IC Light",
		"Oh Mah Gerd",
		"Sick'n Tard",
		"Dahntahn",
		"Jagoff",
		"Perogies",
		"Wach Da Buccos",
		"Kennywood's Open",
		"Pop Naht Soda",
		"Pittsburgh Left",
		"Heinz Naht Hunts",
		"Bleedin' Black n' Gold",
		"Three Rivers",
		"Lawn Chair in Parking Spot",
		"One For The Thumb");

		public function __construct($firstName, $lastName, $pittsburghName) {
			parent::__construct($firstName, $lastName, $pittsburghName);
		}

		public function setRandomPghName() {
			parent::setPghName($Pittsburghese[array_rand($Pittsburghese, 0)]);
		}

		public function __toString() {
			echo parent::getFirstName+" \""+parent::getPghName+"\" "+parent::getLastName;
		}

	}
