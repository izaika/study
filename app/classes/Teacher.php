<?php

class Teacher extends Person
{
	public $faculty;
	public $position;
	public $academic_degree;

	public function __construct(Faculty $faculty) {
		$this->faculty	= $faculty;
	}
}