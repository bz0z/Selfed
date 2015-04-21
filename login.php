<?php
include('header.php');	
?>

<div class="content">
	<form action="checkout.php" method="post">
	Логин: <label class="input_label">
		<input name="login" type="text" value=""> 
	</label>
	<br>
	Пароль: <label class="input_label">
		<input name="pswd" type="text" value="">
	</label>
<input type=submit value="Login">
</form>
</div>
