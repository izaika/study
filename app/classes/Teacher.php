<?php

class Teacher extends Person
{
	use Faculty_Child;

	public $position;
	public $academic_degree;

	public function __construct(Faculty $faculty) {
		$this->faculty	= $faculty;
	}
}