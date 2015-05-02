<?php
$pswd = 'ыдллаод';
if(preg_match("/^[A-zА-я]+$/i",$pswd)){
	echo "OK!!!";
}
else{
	echo "Nope. :з";
}
//echo "<br>".preg_match("/[^(\w)|(\x7F-\xFF)|(\s)]/",$pswd);;


?>
