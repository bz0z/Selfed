<?php
session_start();
if(isset($_SESSION['user_id'])){
	include('template.php');
	include('header.php');
	include('content.php');
}
else{
	header('location: about.php');
}
?>
