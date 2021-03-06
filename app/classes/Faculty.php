<?php

class Faculty
{
	private $name;
	private $groups		= [];
	private $teachers	= [];


	public function __construct(string $name, array $groups = [], array $teachers = []) {
		$this->name		= $name;
		foreach ($groups as $group) {
			$this->addChildItem($group);
		}
	}


	public function addChildItem(Interface_Faculty_Child $item) {
		switch (get_class($item)) {
			case 'Group':
				$this->groups[spl_object_hash($item)] = $item;
				break;
			case 'Teacher':
				$this->teachers[spl_object_hash($item)] = $item;
				break;
		}
		if (spl_object_hash($item->getFaculty()) != spl_object_hash($this)) {
			$item->setFaculty($this);
		}
	}


	public function removeChildItem(Interface_Faculty_Child $item) {
		switch (get_class($item)) {
			case 'Group':
				unset($this->groups[spl_object_hash($item)]);
				break;
			case 'Teacher':
				unset($this->teachers[spl_object_hash($item)]);
				break;
		}
		if (spl_object_hash($item->getFaculty()) == spl_object_hash($this)) {
			$item->removeFaculty();
		}
	}


	public function hasChildItem(Interface_Faculty_Child $item) {
		return array_key_exists(spl_object_hash($item), array_merge($this->groups, $this->teachers));
	}


	public function getName() {
		return $this->name;
	}


	public function setName(string $name) {
		$this->name = $name;
	}


	public function getGroups() {
		return $this->groups;
	}


	public function getTeachers() {
		return $this->teachers;
	}
}