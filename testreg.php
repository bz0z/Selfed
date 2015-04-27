<?php
include('db_con.php');
if (isset($_POST['login'])and isset($_POST['pswd'])){
	$login = $_POST['login'];
	$pswd = $_POST['pswd'];
}
else {
	echo "Некоторые поля пусты!";
}
//trim() удаляет пробелы в начале и в конце, можно удалять не только пробелы
$login = trim($login);
$pswd = trim($pswd);
//htmlspecialchars() превращает все html сущности в набор нейтральных знаков
$login = htmlspecialchars($login);
$pswd = htmlspecialchars($pswd);
if ((strlen($login) < 16 and strlen($login) >= 6) and (strlen($pswd) < 16 and strlen($pswd) >= 6)){ //проверяем кол-во знаков
	if (preg_match("/^[a-z0-9_-]{6,16}$/", $login) and preg_match("/^[a-z0-9_-]{6,16}$/",$pswd)){ //проверяем допустимы ли знаки
		//Запрос к базе данных
		$q = "SELECT id, nickname FROM users WHERE login = '$login' AND password = '$pswd'";
		$query = mysql_query($q);
		while ($row = mysql_fetch_array($query)){
			$id = $row['id'];
			$name = $row['nickname'];
		}
		if ($id){//если запрос удачен - то
			session_start();
			$_SESSION['user_id'] = $id;
			$_SESSION['user_name'] = $name;
			header("LOCATION: index.php");
		}
		else {
			echo "Данного юзера не существует!";
		}
	}
	else {
		echo "Введены некорректные символы!";
	}
}
else {
	echo "Введено некорректное количество символов!";
}

?>
