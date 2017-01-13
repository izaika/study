<?php

class Teacher extends Person implements Interface_Faculty_Child
{
	use Trait_Faculty_Child;

	const POSITION_ASPIRANT				= 0;
	const POSITION_TEACHER				= 1;
	const POSITION_SENIOR_TEACHER		= 2;
	const POSITION_HEAD_OF_DEPARTMENT	= 3;
	const POSITION_DEAN					= 4;

	const ACADEMIC_DEGREE_CANDIDATE		= 0;
	const ACADEMIC_DEGREE_DOCTOR		= 1;
	const ACADEMIC_DEGREE_PROFESSOR		= 2;

	private $position;
	private $academic_degree;

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
			$this->setFaculty($faculty);
		}
	}


	public function getPosition() {
		return $this->position;
	}


	public function setPosition(int $position) {
		$this->position = $position;
	}


	public function getAcademicDegree() {
		return $this->academic_degree;
	}


	public function setAcademicDegree(int $academic_degree) {
		$this->academic_degree = $academic_degree;
	}
}