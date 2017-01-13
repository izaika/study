<?php

class Group
{
	use Faculty_Child;

	private $name;
	private $students = [];

	/**
	 * Group constructor.
	 * @param string $name
	 * @param Faculty $faculty
	 * @param array $students
	 */
	public function __construct(string $name, Faculty $faculty, array $students = []) {
		$this->name = $name;
		foreach ($students as $student) {
			$this->addStudent($student);
		}
		$this->setFaculty($faculty);
	}


	public function addStudent(Student $student) {
		$student->group = $this;
		$this->students[spl_object_hash($student)] = $student;
	}


	public function removeStudent(Student $student) {
		$student->group = null;
		unset($this->students[spl_object_hash($student)]);
	}


	public function getName() {
		return $this->name;
	}


	public function setName(string $name) {
		$this->name = $name;
	}


	public function getStudents() {
		return $this->students;
	}
}
