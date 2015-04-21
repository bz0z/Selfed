<?php
	include('template.php');
?>
<div class="navbar">
	<div class="navbar jax">
		<ul class="nav navbar-nav">
			<li><a class="logo" href ="index.php">SELFED</a></li>
			
			<li><label id='chop'><input name="name" type="text" value="Search"></label></li>
		</ul>
		<ul class="nav navbar-nav header_p">
			<li><a href="about.php">About us</a></li>
			<li><a class="glyphicon glyphicon-star" href="#ja"></a></li>
			<li><a class="glyphicon glyphicon-tags" href="#x"></a></li>
			<li><a class="glyphicon glyphicon-comment" href="#"></a></li>
			<li><a class="glyphicon glyphicon-cog" href="#"></a></li>
			<li><a class="glyphicon glyphicon-user" href="#" onclick="openMenu('sub_menu_1');return(false)"></a>
				<ul id="log_sub_menu">
					<li id="log_sub_menu"><a href="login.php">Login</a></li>
					<li id="log_sub_menu"><a href="reg_form.php">Registration</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
