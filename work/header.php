<?php
	include('template.php');
?>
<div class="header">
	<a href ="../index.php"><div class="logo">SELFED</div></a>
		<?php
		if(isset($_SESSION['user_id'])){
			echo"<a href='#'><div class='nick'>Welcome, ".$_SESSION['user_name']."</div></a>";
		}

		?>

	<ul class="nav navbar-nav">
		<li><a href="../about.php">About us</a></li>
		<li><a class="glyphicon glyphicon-star" href="#ja"></a></li>
		<li><a class="glyphicon glyphicon-tags" href="#x"></a></li>
		<li><a class="glyphicon glyphicon-comment" href="#"></a></li>
		<li><a class="glyphicon glyphicon-cog" href="#"></a></li> 
		<?php
		if(isset($_SESSION['user_id'])){
			echo"<li><a class='glyphicon glyphicon-user' href='../des.php'></a></li>";
		}
		?>
	</ul>
</div>
