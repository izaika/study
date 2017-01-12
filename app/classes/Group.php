<?php

class Group
{
	use Faculty_Child;

	public $name;
	public $students = [];

	public function __construct(string $name, array $students, Faculty $faculty) {
		$this->name		= $name;
		foreach ($students as $student) {
			$this->add_student($student);
		}
		$this->faculty	= $faculty;
	}

	public function add_student(Student $student) {
		$student->group = $this;
		$this->students[spl_object_hash($student)] = $student;
	}

	public function remove_student(Student $student) {
		$student->group = null;
		unset($this->students[spl_object_hash($student)]);
	}
}