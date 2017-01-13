<?php

class Faculty
{
	private $name;
	private $groups		= [];
	private $teachers	= [];


	public function __construct(string $name, array $groups = [], array $teachers = []) {
		$this->name		= $name;
		foreach ($groups as $group) {
			$this->add_child_item($group);
		}
	}


	public function add_child_item(Faculty_Child $item) {
		$item->faculty = $this;
		switch (get_class($item)) {
			case 'Group':
				$this->groups[spl_object_hash($item)] = $item;
				break;
			case 'Teacher':
				$this->teachers[spl_object_hash($item)] = $item;
				break;
		}
	}


	public function remove_child_item(Faculty_Child $item) {
		$item->faculty = null;
		switch (get_class($item)) {
			case 'Group':
				unset($this->groups[spl_object_hash($item)]);
				break;
			case 'Teacher':
				unset($this->teachers[spl_object_hash($item)]);
				break;
		}
	}


	public function setName(string $name) {
		$this->$name = $name;
	}


	public function getName() {
		return $this->name;
	}


	public function getGroups() {
		return $this->groups;
	}


	public function getTeachers() {
		return $this->teachers;
	}
}