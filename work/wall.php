<?php
session_start();
include("db_con.php");
include("functions.php");
	$res = mysql_query("SELECT title, text FROM posts_work WHERE id = '1'");
	$final_text;
	while($row = mysql_fetch_array($res)) {
		$final_text .= "<div class='list_of_posts'><h1>";
		$final_text .= $row['title'];
		$final_text .= "</h1><br>";
		$final_text .= "<p>";
		$final_text .= $row['text'];
		$final_text .= "</p></div>";
		$final_text .= "<br><a href='index.php?=content'>Содержание</a>";
	}	
	echo $final_text;
/*else if () {	
	$zap = "SELECT title, text FROM posts_work WHERE id = '1'";
	$res = mysql_query($zap);
	$final_text;
	while($row = mysql_fetch_array($res)) {
		$final_text .= "<h1 align='center'>".$row['title']."</h1>";
		$final_text .= "<p>";
		$final_text .= $row['text'];
		$final_text .= "</p>";
		$final_text .= "<br><a href='index.php?con=con'>Содержание</a>";
	}
	echo $final_text;
}
*/
