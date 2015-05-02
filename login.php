<?php
include('header.php');	
?>

<div class="content">
	<div class="central_block">
		<div class="forms">
			<h1>Пожалуйста, войдите</h1>
			<br>
			<form action="testreg.php" method="post">
				<table>
					<tr>
						<td>Логин:</td> 
						<td>
							<label class="input_label">
								<input name="login" type="text" value=""> 
							</label>
						</td>
					</tr>
					<tr>
						<td>Пароль:</td>
						<td> 
							<label class="input_label">
								<input name="pswd" type="text" value="">
							</label>
						</td>
					</tr>
				</table>
				<br>
				<input type=submit value="Login">
			</form>
		</div>
		<a href="about.php"><p style="padding-left: 43%; padding-top: 5%;">Вернуться назад</p></a>
	</div>
</div>
