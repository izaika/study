<?php

class Group
{
	public $name;
	public $students = [];

	public function __construct(string $name, array $students) {
		$this->name		= $name;
		foreach ($students as $student) {
			if ($student instanceof Student) {
				$this->students[spl_object_hash($student)] = $student;
			}
		}
	}

	public function add_student(Student $student) {
		if (!array_key_exists(spl_object_hash($student), $this->students)) {
			$this->students[spl_object_hash($student)] = $student;
		}
	}

	public function remove_student(Student $student) {
		unset($this->students[spl_object_hash($student)]);
	}
}