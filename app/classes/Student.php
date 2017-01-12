<?php

class Student extends Person
{
	public $has_scholarship;
	public $group;


	/**
	 * Student constructor.
	 * @param string $name
	 * @param string $dob
	 * @param int $gender
	 * @param bool $has_scholarship
	 * @param Group|null $group
	 */
	public function __construct(string $name, string $dob, int $gender, bool $has_scholarship, Group $group = null) {
		$this->name				= $name;
		$this->dob				= $dob;
		$this->gender			= $gender;
		$this->has_scholarship	= $has_scholarship;
		if ($group) {
			$group->add_student($this);
		}
	}
}