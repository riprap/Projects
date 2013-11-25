<?php
class CollatzConjecture{
	private $numberOfSteps;
	private $n;

	public function __construct($number){
		if (!is_int($number) || $number < 1){
			throw new Exception("Input is not a number greater than 1");
		}
		$this->n = intval($number);
	}
	
	public function calculateSteps(){
		while ($this->n != 1){
			if($this->n % 2 == 0){
				$this->n = $this->n / 2;
			}
			else{
				$this->n = $this->n * 3 + 1;
			}
			$this->numberOfSteps += 1;
		}
	}

	public function getNumberOfSteps(){
		return $this->numberOfSteps;
	}
}

$x = new CollatzConjecture(74);
$x->calculateSteps();
echo $x->getNumberOfSteps();