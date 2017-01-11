<?php

class Student extends Person
{
	public $has_scholarship;

	/**
	 * Student constructor.
	 * @param string $name
	 * @param string $dob
	 * @param string $gender
	 * @param bool $has_scholarship
	 */
	public function __construct(string $name, string $dob, string $gender, bool $has_scholarship) {
		$this->name				= $name;
		$this->dob				= $dob;
		$this->gender			= $gender;
		$this->has_scholarship	= $has_scholarship;
	}
}