<?php
	// this file will extend ParentClass.php

	class ChildClass extends ParentClass {

		function __construct($firstName, $lastName, $pittsburghName) {
			parent::__construct($firstName, $lastName, $pittsburghName);
		}

		public function setRandomPghName() {
			$pittsburghese = array("Sahth O",
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
			"Jeez-o-man",
			"IC Light",
			"Sammich",
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
			"One For The Thumb",
			"Nebby");
			$last = sizeof($pittsburghese)-1;
			$rand = $pittsburghese[mt_rand(0, $last)];
			$this->setPghName($rand);
		}

		function __toString() {
			return parent::__toString();
		}

	}
