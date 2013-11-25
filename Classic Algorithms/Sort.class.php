<?php

class Sort{
	private $set = array();
	private $sortedSet = array();
	public function _construct($set){
		if (is_array($set)) 
			$this->set = $set;
		else
			throw new Exception("Set is not an array");
	}

	public function getSortedSet(){
		return $this->sortedSet;
	}
}

class MergeSort extends Sort{
	public function sort(){
		foreach ($set as $number){
			$this->sortedSet[] = $number;
		}
	}
}

class BubbleSort extends Sort{
	public function sort(){
		
	}
}


$set = array(31,16,221,55,8,34,41,19,130,911,133,222,1,55,10);
$merge = new MergeSort($set);
$merge->sort();
print_r($merge->getSortedSet());