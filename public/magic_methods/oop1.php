<?php
class Person{
	public $firstName;
	public $lastName;
	public $x;

	public function Hello(){
		echo "Hello";
	}

	public function Total($x)
	{
		$total = $x * 100;
		return $total;
	}

	public function __construct()
	{
		echo 'constructor';
	}

	
}

$person = new Person();
//$person->Hello();
//echo $person->Total(50);
?>
