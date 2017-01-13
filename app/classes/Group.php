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
		$this->name		= $name;
		foreach ($students as $student) {
			$this->add_student($student);
		}
		$this->setFaculty($faculty);
	}


	public function add_student(Student $student) {
		$student->group = $this;
		$this->students[spl_object_hash($student)] = $student;
	}


	public function remove_student(Student $student) {
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


	public function getFaculty() {
		return $this->faculty;
	}


	public function setFaculty(Faculty $faculty) {
		$this->faculty = $faculty;
		if (!$faculty->hasChildItem($this)) {
			$faculty->add_child_item($this);
		}
	}


	public function removeFaculty() {
		if ($this->faculty) {
			if ($this->faculty->hasChildItem($this)) {
				$this->faculty->removeChildItem($this);
			}
			$this->faculty = null;
		}
	}
}
