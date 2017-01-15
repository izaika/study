<?php

class Group implements Interface_Faculty_Child
{
	use Trait_Faculty_Child;

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
		$this->students[spl_object_hash($student)] = $student;
		if (spl_object_hash($student->getGroup()) != spl_object_hash($this)) {
			$student->setGroup($this);
		}
	}


	public function removeStudent(Student $student) {
		unset($this->students[spl_object_hash($student)]);
		if (spl_object_hash($student->getGroup()) == spl_object_hash($this)) {
			$student->removeGroup();
		}
	}


	public function hasStudent(Student $item) {
		return array_key_exists(spl_object_hash($item), $this->students);
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
