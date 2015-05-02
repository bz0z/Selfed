<?php

$user = array [
	'name' => $_POST['name'],
	'pswd' => $_POST['pswd'],
	'nickname' => $_POST['nickname'],
	'email' => $_POST['email'],
];

if($d) {
	echo "Ok!";
	sleep(5);
	header('Location:index.html');

}




<script type="text/javascript">
var id_menu = new Array('sub_menu_1','sub_menu_2','sub_menu_3');
startList = function allclose() {
	for (i=0; i < id_menu.length; i++){
		document.getElementById(id_menu[i]).style.display = "none";
	}
}
function openMenu(id){
	for (i=0; i < id_menu.length; i++){
		if (id != id_menu[i]){
			document.getElementById(id_menu[i]).style.display = "none";
		}
	}
	if (document.getElementById(id).style.display == "block"){
		document.getElementById(id).style.display = "none";
	}else{
		document.getElementById(id).style.display = "block";
	}
}
window.onload=startList;
</script>
