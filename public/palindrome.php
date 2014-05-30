<?php
	function palindrome($string) {
	    $reverse = strrev($string);
	    if ($string == $reverse)
	        return ' palindrome';
	    else
	        return 'not a palindrome';
	}
	echo palindrome($_GET['x']);
?>