<?php
function datachek($data, $min_count, $max_count){
		echo "<br>".$data."<br>";
	if (preg_match('/[^a-zA-Z0-9]/i', $data)){
			return 0;
	}
	else if ((strlen($str) < $min_count or strlen($data) > $max_count)){
			return false;
	}
	else return true;
}

	

