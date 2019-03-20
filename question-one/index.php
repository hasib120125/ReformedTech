<?php
	class typeHint{
		public $stringOne;
		public $stringTwo;	
		public $setLimit;	
	}

	$obj = new typeHint;
	$obj->stringOne = 'Reformed';
	$obj->stringTwo = 'Tech';
	$obj->setLimit = 100;

	function printString(typeHint $typeHint){
	    for ($i=1; $i <= $typeHint->setLimit; $i++) { 
	        if($i%3==0 && $i%5==0) echo $typeHint->firstString.$typeHint->stringTwo;
	        else if($i%5==0) echo $typeHint->stringTwo;
	        else if($i%3==0) echo $typeHint->stringOne;
	        else  echo $i;
	        echo "\n";
	    }
	}

	printString($obj);
?>