<?php 
	include('header.php');
?>

<div class="content">
	<div class="central_block">
		<div class="forms_reg">
			<h1>Регистрация</h1>
			<br>
			<form action="reg_testreg.php"  method="post" >
				<table>
					<tr>
						<td>Имя:</td>
						<td>
							<label>
								<input name="name" type="text" value="">
							</label>
						</td>
					</tr>
					<tr>
						<td>Пароль:</td>
						<td>
							<label>
								<input name="pswd" type="text" value="">
							</label>
						</td>
					</tr>
					<tr>
						<td>Повторите пароль:</td>
						<td>
							<label>
								<input name="pswd2" type="text" value="">
							</label>
						</td>
					</tr>
					<tr>
						<td>Введите никнейм:</td>
						<td>
							<label>
								<input name="nick" type="text" value="">
							</label>
						</td>
					</tr>
				</table>
				<br>
				<input type=submit value="Registrate">
			</form>
		</div>
		<a href="about.php"><p style="padding-left: 40%; padding-top: 5%;">Вернуться назад</p></a>
		<p>Ребят, форма пока сырая и работает без вывода ошибок, в отличии от формы логина.</p>
		<p>Поэтому просто прошу использовать только латиницу и цифры, и чтобы длинна была минимум 6 символов, а максимум 16</p>
	</div>
</div>
