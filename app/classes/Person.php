<?php

/**
 * @property  string $name
 * @property  string $dob
 * @property  int $gender
 */

abstract class Person
{
	const GENDER_MALE	= 0;
	const GENDER_FEMALE	= 1;

	protected $name;
	protected $dob;
	protected $gender;


	public function getName() {
		return $this->name;
	}


	public function setName(string $name) {
		$this->name = $name;
	}


	public function getDob() {
		return $this->dob;
	}


	public function setDob(string $dob) {
		$this->dob = $dob;
	}


	public function getGender() {
		return $this->gender;
	}


	public function setGender(int $gender) {
		$this->gender = $gender;
	}
}