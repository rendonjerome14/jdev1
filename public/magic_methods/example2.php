<?php

	class Test
	{
		public $name;
		public function Hello()
		{
			echo 'Hello';
		}

		function __get($param)
		{
			echo "$param does no exists";
		}

		function __set($name, $value)
		{
			echo "set property of $name -> $value";
			$this->{$name}=$value;
		}

		function __call($param, $value)
		{
			echo "you were going to pricess $param($value)";
		}

		function __construct()
		{
			echo 'constucted';
		}

		function __destruct()
		{
			echo 'destructed';
		}

		function __toString()
		{
			return 'magic method to string';
		}

		function __clone()
		{
			echo 'cloned';
		}

		function __invoke($var)
		{
			echo 'cannot be';
		}
	}

	$test = new Test();
	//$test(1);
	//echo $test; //echo on toString
	//$test->Hello(); //function
	//$test->age = 15; //set
	//$test->name; //get
	//$test->DoesntExist('123','121','111'); //call
	//$test2 = clone $test; //clones the object

	//get = called when getting a property that does not exists.
	//set = set a value to a new property
	//call = called when callung inaccessoble methods in an object
	//toString = called when echoing the object
	//construct = called upon calling the class
	//destruct = called when destroyed
	//invoke = called when running


?>
