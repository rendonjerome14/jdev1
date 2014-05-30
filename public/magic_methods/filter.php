<?php
	class curseFilter{

		public function clean($str){
		$badwords=array("idiot","jerk","shit");
		$replacers=array("id**t","j**k","s**t");
		$cleanStr = str_ireplace($badwords, $replacers, $str);
		return $cleanStr;	
		}

		public function delete($str){
		$badwords=array("idiot","jerk","shit");
		$replacers=array("id__t","j__k","s__t");
		$cleanStr = str_ireplace($badwords, $replacers, $str);
		return $cleanStr;	
		}
	}
?>