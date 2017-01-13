<?php

/**
 * @property  bool $scholarship
 * @property  Group $group
 */

class Student extends Person
{
	private $scholarship;
	private $group;


	/**
	 * Student constructor.
	 * @param string $name
	 * @param string $dob
	 * @param int $gender
	 * @param bool $scholarship
	 * @param Group|null $group
	 */
	public function __construct(string $name, string $dob, int $gender, bool $scholarship, Group $group = null) {
		$this->name			= $name;
		$this->dob			= $dob;
		$this->gender		= $gender;
		$this->scholarship	= $scholarship;
		if ($group) {
			$this->setGroup($group);
		}
	}


	public function getScholarship() {
		return $this->scholarship;
	}


	public function setScholarship(bool $scholarship) {
		$this->scholarship = $scholarship;
	}


	public function getGroup() {
		return $this->group;
	}


	public function setGroup(Group $group) {
		$this->group = $group;
		if (!$group->hasStudent($this)) {
			$group->addStudent($this);
		}
	}


	public function removeGroup() {
		if ($this->group) {
			if ($this->group->hasStudent($this)) {
				$this->group->removeStudent($this);
			}
			$this->group = null;
		}
	}
}