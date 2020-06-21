<?php 
 namespace calculate;

class Calc {

 
	public $operation;
	public $num1;
	public $num2;

	function __construct($operation,$num1,$num2){

		$this->operation=$operation;
		$this->num1=$num1;
		$this->num2=$num2;


	}

	function calcMethod(){
		switch ($this->operation) {
			case 'add':
			  return $this->num1+$this->num2;
			case 'sub':
				return $this->num1-$this->num2;
			case 'mul':
				return $this->num1-$this->num2;
			
		  }
	}

}