<?php
include('db_con.php');
include('functions.php');
if (!empty($_POST['name']) and !empty($_POST['pswd']) and !empty($_POST['pswd2']) and !empty($_POST['nick'])){
	$login = $_POST['name'];
	$pswd = $_POST['pswd'];
	$pswd2 = $_POST['pswd2'];
	$nick = $_POST['nick'];
}
else {
	echo "Некоторые поля пусты!";
	echo"<br><a href='reg_form.php'>Вернуться назад</a>";
	exit;
}
if(!($pswd == $pswd2)){
	echo "Пароли не совпадают!";
	echo"<br><a href='reg_form.php'>Вернуться назад</a>";
	exit;
}
$login = validation($login);
$pswd = validation($pswd);
$nick = validation($nick);

if ((strlen($login) < 16 and strlen($login) >= 6) and (strlen($pswd) < 16 
	and strlen($pswd) >= 6) and (strlen($nick) < 16 and strlen($nick) >= 6)){ //проверяем кол-во знаков
	if (preg_match("/^[a-z0-9_-]{6,16}$/", $login) and preg_match("/^[a-z0-9_-]{6,16}$/",$pswd)
		and preg_match("/^[a-z0-9_-]{6,16}$/",$nick)){ //проверяем допустимы ли знаки
		$q = "SELECT login, nickname FROM users WHERE login = '$login' OR nickname = '$nick'";
		$query = mysql_query($q);
		while ($row = mysql_fetch_array($query)){
			$log = $row['login'];
			$nname = $row['nickname'];
		}
		if ($log != $login){//если запрос удачен - то
			if($nname != $nick){					
				$ins_user = mysql_query ("INSERT INTO users (login, password, nickname) VALUES('$login','$pswd','$nick')");
				if($ins_user){
					echo"Вы успешно зарегестрированы!<br>Теперь войдите, пожалуйста.<br><a href='about.php'>На главную</a>";
				}
			}
			else {
				echo "Такой никнейм уже используется!<br><a href='login.php'>Вернуться назад.</a>";
			}
		}
		else {
			echo "Такой логин уже используется!<br><a href='login.php'>Вернуться назад.</a>";
		}
	}
	else {
		echo "Введены некорректные символы!<br><a href='login.php'>Вернуться назад.</a>";
	}
}
else {
	echo "Введено некорректное количество символов!<br><a href='login.php'>Вернуться назад.</a>";
}

?>

