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
function validation($value){
	$value = trim($value);
	$value = htmlspecialchars($value);
	return $value;
}

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}

function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}
function t(){
	echo "test";
}
