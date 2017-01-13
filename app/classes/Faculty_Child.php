<?php

/**
 * @property  Faculty $faculty
 */

trait Faculty_Child
{
	private $faculty;


	public function getFaculty() {
		return $this->faculty;
	}


	public function setFaculty(Faculty $faculty) {
		$this->faculty = $faculty;
		if (!$faculty->hasChildItem($this)) {
			$faculty->addChildItem($this);
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