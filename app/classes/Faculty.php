<?php

class Faculty
{
	public $name;
	public $groups;
	public $teachers;


	public function __construct(string $name, array $groups = null, array $teachers = null) {
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
}