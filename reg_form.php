<?php 
	include('header.php');
?>

<div class="add_post content">
	<h2 class="blog-post-title">Регистрация</h2>
        <br>
	<form action="reg.php"  method="post" >
	<table><tr>
		<label>
			<td>Имя: </td><td><input name="name" type="text" value=""></td>
		</label>
		</tr><tr>
		<label>
			<td>Пароль: </td><td><input name="pswd" type="text" value=""></td>
		</label>
		</tr><tr>
		<label>
			<td>Повторите пароль: </td><td><input name="pswd" type="text" value=""></td>
		</label>
		</tr><tr>
		<label>
			<td>Никнейм: </td><td><input name="nick" type="text" value=""></td>
		</label>
		</tr><tr>
		<label>
			<td>Мыло: </td><td><input name="email" type="text" value=""></td>
		</label>
		</tr><tr><td>
		<input type=submit value="Добавить">
		</td></tr></table>
	</form>
</div>
