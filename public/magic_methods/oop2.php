<?php

class Person{
	public $name;
	public $job;

	public function __construct($name, $job){
		$this->name=$name;
		$this->job=$job;
	}
	public function communicate($style = 'voice'){
		return 'communicating with ' . $style;
	}
}

//$p = new Person('John', 'Teacher');
//echo $p->communicate('jerome');

//$ar = array('Jerome' => 'Makati', 'John' => 'US', 'Mark' => 'Pakistan');
//foreach ($ar as $name => $location) {
//	echo $name . ' ' . $location . '<br>';
//}



?>
