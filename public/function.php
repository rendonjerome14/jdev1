<html>
<head><title>palindrome</title></head>
<body>
	<form name="input" method="get">
	String: <input type="text" name="txt" value =''>
	<input type="submit" value="Submit">
	</form> 
	<?php
	function palindrome($string) {
	    $reverse = strrev($string);
	    if ($string == $reverse)
	        echo ' palindrome';
	    else
	        echo 'not a palindrome';
	}
	palindrome($_GET['txt']);
	?>
</body>
</html>