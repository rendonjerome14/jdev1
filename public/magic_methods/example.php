<?php
	include("filter.php");

	$curseFilter = new curseFilter;

	$string='idiot jerk jerome';
	$clean_str= ($curseFilter->clean($string));
	echo $clean_str;	
?>
