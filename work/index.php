<?php
session_start();
if(!isset($_SESSION['user_id'])){
	header('location: ../about.php');
}
include('template.php');
include('header.php');
include('content.php');
include('../db_con.php');
include('../functions.php');

?>
