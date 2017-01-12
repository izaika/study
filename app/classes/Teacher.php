<?php

class Teacher extends Person
{
	use Faculty_Child;

	const POSITION_ASPIRANT				= 0;
	const POSITION_TEACHER				= 1;
	const POSITION_SENIOR_TEACHER		= 2;
	const POSITION_HEAD_OF_DEPARTMENT	= 3;
	const POSITION_DEAN					= 4;

	const ACADEMIC_DEGREE_CANDIDATE		= 0;
	const ACADEMIC_DEGREE_DOCTOR		= 1;
	const ACADEMIC_DEGREE_PROFESSOR		= 2;

	public $position;
	public $academic_degree;

	/**
	 * Teacher constructor.
	 * @param string $name
	 * @param string $dob
	 * @param int $gender
	 * @param int $position
	 * @param int $academic_degree
	 * @param Faculty|null $faculty
	 */
	public function __construct(string $name, string $dob, int $gender, int $position, int $academic_degree, Faculty $faculty = null) {
		$this->name				= $name;
		$this->dob				= $dob;
		$this->gender			= $gender;
		$this->position			= $position;
		$this->academic_degree	= $academic_degree;
		if ($faculty) {
			$faculty->add_child_item($this);
		}
	}
}